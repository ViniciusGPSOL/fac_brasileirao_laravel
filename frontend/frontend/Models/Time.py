# In Time.py
from dataclasses import dataclass
import copy
from typing import Optional
import httpx


@dataclass
class Time:
    nome: str
    estadio: Optional[str] = None
    cidade: Optional[str] = None
    id: Optional[int] = None
    created_at: Optional[str] = None
    updated_at: Optional[str] = None

    @staticmethod
    def new_empty() -> "Time":
        return Time(
            nome="",
            estadio="",
            cidade="",
        )

    def copy(self) -> "Time":
        return copy.copy(self)


class TimeAPI:
    BASE_URL = "http://host.docker.internal:80/api/times"
    TIMEOUT = 20.0  # Reduced timeout to 5 seconds

    @staticmethod
    async def get_all() -> list[Time]:
        async with httpx.AsyncClient(
            timeout=httpx.Timeout(TimeAPI.TIMEOUT), headers={"Accept": "application/json"}
        ) as client:
            try:
                response = await client.get(TimeAPI.BASE_URL)
                if response.status_code == 200:
                    return [Time(**item) for item in response.json()]
                else:
                    print(f"API returned status code: {response.status_code}")
                    print(f"Response content: {response.text}")
            except httpx.TimeoutException:
                print("Request timed out")
            except Exception as e:
                print(f"Error fetching times: {type(e).__name__} - {str(e)}")
            return []

    @staticmethod
    async def get_one(id: int) -> Optional[Time]:
        async with httpx.AsyncClient(timeout=httpx.Timeout(TimeAPI.TIMEOUT)) as client:
            try:
                response = await client.get(f"{TimeAPI.BASE_URL}/{id}")
                if response.status_code == 200:
                    return Time(**response.json())
            except Exception as e:
                print(f"Error fetching time: {e}")
            return None

    @staticmethod
    async def create(time: Time) -> Optional[Time]:
        async with httpx.AsyncClient(timeout=httpx.Timeout(TimeAPI.TIMEOUT)) as client:
            try:
                response = await client.post(
                    TimeAPI.BASE_URL, json={"nome": time.nome, "estadio": time.estadio, "cidade": time.cidade}
                )
                if response.status_code == 201:
                    return Time(**response.json())
            except Exception as e:
                print(f"Error creating time: {e}")
            return None

    @staticmethod
    async def update(time: Time) -> Optional[Time]:
        if not time.id:
            return None

        async with httpx.AsyncClient(timeout=httpx.Timeout(TimeAPI.TIMEOUT)) as client:
            try:
                response = await client.put(
                    f"{TimeAPI.BASE_URL}/{time.id}",
                    json={"nome": time.nome, "estadio": time.estadio, "cidade": time.cidade},
                )
                if response.status_code == 200:
                    return Time(**response.json())
            except Exception as e:
                print(f"Error updating time: {e}")
            return None

    @staticmethod
    async def delete(id: int) -> bool:
        async with httpx.AsyncClient(timeout=httpx.Timeout(TimeAPI.TIMEOUT)) as client:
            try:
                response = await client.delete(f"{TimeAPI.BASE_URL}/{id}")
                return response.status_code == 204
            except Exception as e:
                print(f"Error deleting time: {e}")
                return False
