from __future__ import annotations
from dataclasses import dataclass
import httpx


@dataclass
class ClassificacaoTime:
    id: int
    nome: str
    jogos: int
    pontos: int
    vitorias: int
    empates: int
    derrotas: int
    gols_pro: int
    gols_contra: int
    saldo_gols: int


class ClassificacaoAPI:
    BASE_URL = "http://host.docker.internal:80/api/classificacao"
    TIMEOUT = 20.0

    @staticmethod
    async def get_classificacao(ano: int, data: str) -> list[ClassificacaoTime]:
        async with httpx.AsyncClient(timeout=httpx.Timeout(ClassificacaoAPI.TIMEOUT)) as client:
            try:
                response = await client.get(ClassificacaoAPI.BASE_URL, params={"ano": ano, "data": data})
                if response.status_code == 200:
                    data = response.json()["data"]
                    return [ClassificacaoTime(**item) for item in data]
            except Exception as e:
                print(f"Error fetching classificacao: {e}")
            return []
