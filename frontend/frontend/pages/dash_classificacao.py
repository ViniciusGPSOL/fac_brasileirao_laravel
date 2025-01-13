from __future__ import annotations
from dataclasses import field
import typing as t
from datetime import datetime
import rio
from ..Models.Classificacao import ClassificacaoTime, ClassificacaoAPI


@rio.page(
    name="Classificação",
    url_segment="classificacao",
)
class ClassificacaoPage(rio.Component):
    classificacao: list[ClassificacaoTime] = field(default_factory=list)
    selected_year: int = datetime.now().year
    selected_date: str = datetime.now().strftime("%Y-%m-%d")
    banner_text: str = ""
    banner_style: t.Literal["success", "danger", "info"] = "success"
    is_loading: bool = False

    @rio.event.on_populate
    async def on_populate(self) -> None:
        await self.load_classificacao()

    async def load_classificacao(self) -> None:
        self.is_loading = True
        self.banner_text = "Carregando classificação..."
        self.banner_style = "info"

        try:
            self.classificacao = await ClassificacaoAPI.get_classificacao(self.selected_year, self.selected_date)
            if self.classificacao:
                self.banner_text = f"Classificação do Campeonato {self.selected_year}"
                self.banner_style = "success"
            else:
                self.banner_text = "Nenhum dado encontrado"
                self.banner_style = "info"
        except Exception as e:
            self.banner_text = f"Erro ao carregar dados: {str(e)}"
            self.banner_style = "danger"
        finally:
            self.is_loading = False

    async def on_date_change(self, event: rio.DateChangeEvent) -> None:
        self.selected_date = event.value.strftime("%Y-%m-%d")
        await self.load_classificacao()

    async def on_year_change(self, event: rio.NumberInputChangeEvent) -> None:
        self.selected_year = event.value
        await self.load_classificacao()

    def _create_table_data(self) -> dict[str, list[str | int]]:
        return {
            "Pos": [str(i) for i in range(1, len(self.classificacao) + 1)],
            "Time": [time.nome for time in self.classificacao],
            "P": [str(time.pontos) for time in self.classificacao],
            "J": [str(time.jogos) for time in self.classificacao],
            "V": [str(time.vitorias) for time in self.classificacao],
            "E": [str(time.empates) for time in self.classificacao],
            "D": [str(time.derrotas) for time in self.classificacao],
            "GP": [str(time.gols_pro) for time in self.classificacao],
            "GC": [str(time.gols_contra) for time in self.classificacao],
            "SG": [str(time.saldo_gols) for time in self.classificacao],
        }

    def build(self) -> rio.Component:
        if self.is_loading:
            return rio.Column(
                rio.Banner(
                    self.banner_text,
                    style=self.banner_style,
                    margin_bottom=1,
                ),
                rio.ProgressCircle(),
                align_y=0,
                margin=3,
            )

        # Filter controls
        controls = rio.Row(
            rio.NumberInput(
                value=self.selected_year,
                label="Ano",
                on_change=self.on_year_change,
                minimum=2020,
                maximum=datetime.now().year,
                decimals=0,
                thousands_separator=False,
            ),
            rio.DateInput(
                value=datetime.strptime(self.selected_date, "%Y-%m-%d").date(),
                label="Data",
                on_change=self.on_date_change,
            ),
            spacing=2,
            margin=2,
        )

        # Create table
        table = rio.Table(
            data=self._create_table_data(),
            show_row_numbers=False,
            min_width=40,
            grow_x=True,
        )

        return rio.Column(
            rio.Banner(
                self.banner_text,
                style=self.banner_style,
                margin_bottom=1,
            ),
            controls,
            rio.Card(
                table,
                margin=2,
            ),
            align_y=0,
            margin=3,
        )
