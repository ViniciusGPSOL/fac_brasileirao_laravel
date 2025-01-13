from __future__ import annotations
import functools
import typing as t
from dataclasses import field
import rio
from ..Models.Partida import Partida, PartidaAPI
from ..Models.Time import Time, TimeAPI


@rio.page(
    name="Partidas",
    url_segment="partidas",
)
class PartidasPage(rio.Component):
    partidas: list[Partida] = field(default_factory=list)
    times: list[Time] = field(default_factory=list)
    currently_selected_partida: Partida | None = None
    banner_text: str = ""
    banner_style: t.Literal["success", "danger", "info"] = "success"
    is_loading: bool = False
    partida_filter: str | None = None

    @rio.event.on_populate
    async def on_populate(self) -> None:
        self.is_loading = True
        self.banner_text = "Carregando partidas..."
        self.banner_style = "info"

        try:
            # Load both partidas and times
            self.partidas = await PartidaAPI.get_all()
            self.times = await TimeAPI.get_all()

            if self.partidas:
                self.banner_text = f"{len(self.partidas)} partidas carregadas"
                self.banner_style = "success"
            else:
                self.banner_text = "Nenhuma partida encontrada"
                self.banner_style = "info"
        except Exception as e:
            self.banner_text = f"Erro ao carregar dados: {str(e)}"
            self.banner_style = "danger"
        finally:
            self.is_loading = False

    def build(self) -> rio.Component:
        list_items = []

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

        # Add your filter dropdown
        if self.times:
            options = {"Todos": ""} | {time.nome: str(time.id) for time in self.times}
            list_items.append(
                rio.Dropdown(
                    options=options,
                    selected_value=self.partida_filter,
                    on_change=self.on_filter_change,
                    label="Filtrar por Time",
                    key="time_filter",  # Add a key
                )
            )

        list_items.append(
            rio.SimpleListItem(
                text="Adicionar nova",
                secondary_text="Clique para adicionar uma nova partida",
                key="add_new",
                left_child=rio.Icon("material/add"),
                on_press=self.on_spawn_dialog_add_new_partida,
            )
        )

        for i, item in enumerate(self.partidas):
            list_items.append(
                rio.SimpleListItem(
                    text=item.score_display,
                    secondary_text=f"{item.formatted_date} - {item.estadio}",
                    right_child=rio.Button(
                        rio.Icon("material/delete", margin=0.5),
                        color=self.session.theme.danger_color,
                        min_width=8,
                        on_press=functools.partial(self.on_press_delete_item, i),
                    ),
                    key=str(item.id),
                    on_press=functools.partial(self.on_spawn_dialog_edit_partida, item, i),
                )
            )

        return rio.Column(
            rio.Banner(
                self.banner_text,
                style=self.banner_style,
                margin_bottom=1,
            ),
            (
                rio.ListView(
                    *list_items,
                    align_y=0,
                )
                if self.partidas
                else rio.Text("Nenhuma partida cadastrada")
            ),
            align_y=0,
            margin=3,
        )

    async def on_filter_change(self, event: rio.DropdownChangeEvent) -> None:
        if event.value:
            # Convert the selected team ID to int and find the corresponding Time object
            team_id = int(event.value)
            selected_team = next((time for time in self.times if time.id == team_id), None)
            if selected_team:
                self.partidas = await PartidaAPI.get_all(selected_team)
        else:
            # If no team is selected, show all partidas
            self.partidas = await PartidaAPI.get_all()

    async def on_press_delete_item(self, idx: int) -> None:
        partida = self.partidas[idx]
        if partida.id and await PartidaAPI.delete(partida.id):
            self.partidas.pop(idx)
            self.banner_text = "Partida foi deletada"
            self.banner_style = "danger"
            self.currently_selected_partida = None
        else:
            self.banner_text = "Erro ao deletar partida"
            self.banner_style = "danger"

    async def _create_dialog_item_editor(self, selected_partida: Partida, new_entry: bool) -> Partida | None:
        selected_partida_copied = selected_partida.copy()

        def build_dialog_content() -> rio.Component:
            text = "Adicionar Nova Partida" if new_entry else "Editar Partida"

            return rio.Column(
                rio.Text(
                    text=text,
                    style="heading2",
                    margin_bottom=1,
                ),
                rio.DateInput(
                    selected_partida_copied.data,
                    label="Data",
                    on_change=on_change_data,
                ),
                rio.Dropdown(
                    options={time.nome: str(time.id) for time in self.times},
                    selected_value=str(selected_partida_copied.id_time_casa),
                    label="Time Casa",
                    on_change=on_change_time_casa,
                ),
                rio.NumberInput(
                    selected_partida_copied.gols_time_casa,
                    label="Gols Time Casa",
                    on_change=on_change_gols_casa,
                    minimum=0,
                ),
                rio.Dropdown(
                    options={time.nome: str(time.id) for time in self.times},
                    selected_value=str(selected_partida_copied.id_time_visitante),
                    label="Time Visitante",
                    on_change=on_change_time_visitante,
                ),
                rio.NumberInput(
                    selected_partida_copied.gols_time_visitante,
                    label="Gols Time Visitante",
                    on_change=on_change_gols_visitante,
                    minimum=0,
                ),
                rio.TextInput(
                    selected_partida_copied.estadio,
                    label="Estádio",
                    on_change=on_change_estadio,
                ),
                rio.Row(
                    rio.Button(
                        "Salvar",
                        on_press=lambda: dialog.close(selected_partida_copied),
                    ),
                    rio.Button(
                        "Cancelar",
                        on_press=lambda: dialog.close(selected_partida),
                    ),
                    spacing=1,
                    align_x=1,
                ),
                spacing=1,
                align_y=0,
                margin=2,
                min_width=40,
            )

        def on_change_data(ev: rio.DateChangeEvent) -> None:
            selected_partida_copied.data = ev.value

        def on_change_time_casa(ev: rio.DropdownChangeEvent) -> None:
            selected_partida_copied.id_time_casa = int(ev.value)

        def on_change_gols_casa(ev: rio.NumberInputChangeEvent) -> None:
            selected_partida_copied.gols_time_casa = ev.value

        def on_change_time_visitante(ev: rio.DropdownChangeEvent) -> None:
            selected_partida_copied.id_time_visitante = int(ev.value)

        def on_change_gols_visitante(ev: rio.NumberInputChangeEvent) -> None:
            selected_partida_copied.gols_time_visitante = ev.value

        def on_change_estadio(ev: rio.TextInputChangeEvent) -> None:
            selected_partida_copied.estadio = ev.text

        dialog = await self.session.show_custom_dialog(
            build=build_dialog_content,
            modal=True,
            user_closeable=False,
        )

        return await dialog.wait_for_close()

    async def on_spawn_dialog_edit_partida(self, selected_partida: Partida, idx: int) -> None:
        assert selected_partida is not None
        result = await self._create_dialog_item_editor(selected_partida=selected_partida, new_entry=False)

        if result is None:
            self.banner_text = "Partida não foi atualizada"
            self.banner_style = "danger"
        else:
            updated_partida = await PartidaAPI.update(result)
            if updated_partida:
                self.partidas[idx] = updated_partida
                self.banner_text = "Partida foi atualizada"
                self.banner_style = "info"
            else:
                self.banner_text = "Erro ao atualizar partida"
                self.banner_style = "danger"

    async def on_spawn_dialog_add_new_partida(self) -> None:
        new_partida = Partida.new_empty()
        result = await self._create_dialog_item_editor(selected_partida=new_partida, new_entry=True)

        if result is None:
            self.banner_text = "Partida não foi adicionada"
            self.banner_style = "danger"
        else:
            created_partida = await PartidaAPI.create(result)
            if created_partida:
                self.partidas.append(created_partida)
                self.banner_text = "Partida foi adicionada"
                self.banner_style = "success"
            else:
                self.banner_text = "Erro ao adicionar partida"
                self.banner_style = "danger"
