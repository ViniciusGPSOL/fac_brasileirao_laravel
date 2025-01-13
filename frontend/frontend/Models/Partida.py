from __future__ import annotations
from dataclasses import dataclass
import copy
from typing import Optional
import httpx
from datetime import datetime, date
from .Time import Time


@dataclass
class Partida:
    data: date
    id_time_casa: int
    gols_time_casa: int
    id_time_visitante: int
    gols_time_visitante: int
    estadio: str
    id: Optional[int] = None
    timeCasa: Optional[Time] = None
    timeVisitante: Optional[Time] = None
    created_at: Optional[str] = None
    updated_at: Optional[str] = None

    @staticmethod
    def new_empty() -> "Partida":
        return Partida(
            data=date.today(),
            id_time_casa=0,
            gols_time_casa=0,
            id_time_visitante=0,
            gols_time_visitante=0,
            estadio="",
        )

    @property
    def formatted_date(self) -> str:
        """Returns the date in a more readable format"""
        return self.data.strftime("%d/%m/%Y")

    def copy(self) -> "Partida":
        return copy.copy(self)

    @property
    def score_display(self) -> str:
        """Returns the match score in a readable format"""
        home_team = self.timeCasa.nome if self.timeCasa else "Time Casa"
        away_team = self.timeVisitante.nome if self.timeVisitante else "Time Visitante"
        return f"{home_team} {self.gols_time_casa} x {self.gols_time_visitante} {away_team}"


class PartidaAPI:
    BASE_URL = "http://host.docker.internal:80/api/partidas"
    TIMEOUT = 20.0

    @staticmethod
    def _transform_api_data(item: dict) -> dict:
        """Transform API response data to match our model structure"""
        # Convert the date string from API to date object
        date_str = item["data"]
        if isinstance(date_str, str):
            date_obj = datetime.strptime(date_str.split("T")[0], "%Y-%m-%d").date()
        else:
            date_obj = date.today()

        transformed_data = {
            "data": date_obj,
            "id_time_casa": item["id_time_casa"],
            "gols_time_casa": item["gols_time_casa"],
            "id_time_visitante": item["id_time_visitante"],
            "gols_time_visitante": item["gols_time_visitante"],
            "estadio": item["estadio"],
            "id": item["id"],
            "created_at": item["created_at"],
            "updated_at": item["updated_at"],
        }

        if "time_casa" in item:
            transformed_data["timeCasa"] = Time(**item["time_casa"])
        if "time_visitante" in item:
            transformed_data["timeVisitante"] = Time(**item["time_visitante"])

        return transformed_data

    @staticmethod
    async def get_all(time: Time = None) -> list[Partida]:
        if time is None:
            async with httpx.AsyncClient(
                timeout=httpx.Timeout(PartidaAPI.TIMEOUT), headers={"Accept": "application/json"}
            ) as client:
                try:
                    response = await client.get(PartidaAPI.BASE_URL)
                    if response.status_code == 200:
                        return [Partida(**PartidaAPI._transform_api_data(item)) for item in response.json()]
                    else:
                        print(f"API returned status code: {response.status_code}")
                        print(f"Response content: {response.text}")
                except httpx.TimeoutException:
                    print("Request timed out")
                except Exception as e:
                    print(f"Error fetching partidas: {type(e).__name__} - {str(e)}")
                return []
        else:
            async with httpx.AsyncClient(
                timeout=httpx.Timeout(PartidaAPI.TIMEOUT), headers={"Accept": "application/json"}
            ) as client:
                try:
                    response = await client.get(
                        f"http://host.docker.internal:80/api/partidas-by-team/?time_id={time.id}"
                    )
                    if response.status_code == 200:
                        return [Partida(**PartidaAPI._transform_api_data(item)) for item in response.json()]
                    else:
                        print(f"API returned status code: {response.status_code}")
                        print(f"Response content: {response.text}")
                except httpx.TimeoutException:
                    print("Request timed out")
                except Exception as e:
                    print(f"Error fetching partidas: {type(e).__name__} - {str(e)}")
                return []

    @staticmethod
    async def get_one(id: int) -> Optional[Partida]:
        async with httpx.AsyncClient(timeout=httpx.Timeout(PartidaAPI.TIMEOUT)) as client:
            try:
                response = await client.get(f"{PartidaAPI.BASE_URL}/{id}")
                if response.status_code == 200:
                    return Partida(**PartidaAPI._transform_api_data(response.json()))
            except Exception as e:
                print(f"Error fetching partida: {e}")
            return None

    @staticmethod
    async def get_by_date(data_inicio: str, data_fim: str) -> list[Partida]:
        async with httpx.AsyncClient(timeout=httpx.Timeout(PartidaAPI.TIMEOUT)) as client:
            try:
                response = await client.get(
                    f"{PartidaAPI.BASE_URL}/by-date", params={"data_inicio": data_inicio, "data_fim": data_fim}
                )
                if response.status_code == 200:
                    return [Partida(**item) for item in response.json()]
            except Exception as e:
                print(f"Error fetching partidas by date: {e}")
            return []

    @staticmethod
    async def get_by_team(time_id: int) -> list[Partida]:
        async with httpx.AsyncClient(timeout=httpx.Timeout(PartidaAPI.TIMEOUT)) as client:
            try:
                response = await client.get(f"{PartidaAPI.BASE_URL}/by-team", params={"time_id": time_id})
                if response.status_code == 200:
                    return [Partida(**item) for item in response.json()]
            except Exception as e:
                print(f"Error fetching partidas by team: {e}")
            return []

    @staticmethod
    async def create(partida: Partida) -> Optional[Partida]:
        async with httpx.AsyncClient(timeout=httpx.Timeout(PartidaAPI.TIMEOUT)) as client:
            try:
                payload = {
                    "data": partida.data.strftime("%Y-%m-%d"),  # Convert date to string
                    "id_time_casa": partida.id_time_casa,
                    "gols_time_casa": partida.gols_time_casa,
                    "id_time_visitante": partida.id_time_visitante,
                    "gols_time_visitante": partida.gols_time_visitante,
                    "estadio": partida.estadio,
                }
                response = await client.post(PartidaAPI.BASE_URL, json=payload)
                if response.status_code == 201:
                    return Partida(**PartidaAPI._transform_api_data(response.json()))
            except Exception as e:
                print(f"Error creating partida: {e}")
            return None

    @staticmethod
    async def update(partida: Partida) -> Optional[Partida]:
        if not partida.id:
            return None

        async with httpx.AsyncClient(timeout=httpx.Timeout(PartidaAPI.TIMEOUT)) as client:
            try:
                payload = {
                    "data": partida.data.strftime("%Y-%m-%d"),  # Convert date to string
                    "id_time_casa": partida.id_time_casa,
                    "gols_time_casa": partida.gols_time_casa,
                    "id_time_visitante": partida.id_time_visitante,
                    "gols_time_visitante": partida.gols_time_visitante,
                    "estadio": partida.estadio,
                }
                response = await client.put(f"{PartidaAPI.BASE_URL}/{partida.id}", json=payload)
                if response.status_code == 200:
                    return Partida(**PartidaAPI._transform_api_data(response.json()))
            except Exception as e:
                print(f"Error updating partida: {e}")
            return None

    @staticmethod
    async def delete(id: int) -> bool:
        async with httpx.AsyncClient(timeout=httpx.Timeout(PartidaAPI.TIMEOUT)) as client:
            try:
                response = await client.delete(f"{PartidaAPI.BASE_URL}/{id}")
                return response.status_code == 204
            except Exception as e:
                print(f"Error deleting partida: {e}")
                return False
