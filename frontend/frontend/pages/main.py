from __future__ import annotations
import rio


@rio.page(
    name="Main",
    url_segment="",
)
class MainPage(rio.Component):
    def build(self) -> rio.Component:
        return rio.Column(
            # Header
            rio.Text(
                "Campeonato",
                style="heading1",
            ),
            # Navigation Cards in a Row
            rio.Row(
                # Times Card
                rio.Card(
                    content=rio.Column(
                        rio.Text(
                            "Times",
                            style="heading2",
                        ),
                        rio.Text(
                            "Gerenciar Times",
                            style="text",
                        ),
                        spacing=3,
                        align_x=1,
                        margin_left=1,
                        margin_right=1,
                    ),
                    on_press=lambda: self.session.navigate_to("/times"),
                ),
                # Partidas Card
                rio.Card(
                    content=rio.Column(
                        rio.Text(
                            "Partidas",
                            style="heading2",
                        ),
                        rio.Text(
                            "Gerenciar Partidas",
                            style="text",
                        ),
                        spacing=3,
                        align_x=1,
                        margin_left=1,
                        margin_right=1,
                    ),
                    on_press=lambda: self.session.navigate_to("/partidas"),
                ),
                # Classificação Card
                rio.Card(
                    content=rio.Column(
                        rio.Text(
                            "Classificação",
                            style="heading2",
                        ),
                        rio.Text(
                            "Ver Tabela",
                            style="text",
                        ),
                        spacing=3,
                        align_x=1,
                        margin_left=1,
                        margin_right=1,
                    ),
                    on_press=lambda: self.session.navigate_to("/classificacao"),
                ),
                spacing=2,
                align_x=0.5,
            ),
            # Navigation Buttons
            rio.Row(
                rio.Button(
                    "Times",
                    on_press=lambda: self.session.navigate_to("/times"),
                ),
                rio.Button(
                    "Partidas",
                    on_press=lambda: self.session.navigate_to("/partidas"),
                ),
                rio.Button(
                    "Classificação",
                    on_press=lambda: self.session.navigate_to("/classificacao"),
                ),
                spacing=1,
                align_x=0.5,
            ),
            spacing=3,
            align_x=0.5,
            align_y=0,
            margin=2,
        )
