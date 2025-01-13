# In crud_time.py
from __future__ import annotations
import functools
import typing as t
from dataclasses import field
import rio
from ..Models.Time import Time, TimeAPI


@rio.page(
    name="Times",
    url_segment="times",
)
class TimesPage(rio.Component):
    times: list[Time] = field(default_factory=list)
    currently_selected_time: Time | None = None
    banner_text: str = ""
    banner_style: t.Literal["success", "danger", "info"] = "success"
    is_loading: bool = False

    @rio.event.on_populate
    async def on_populate(self) -> None:
        self.is_loading = True
        self.banner_text = "Carregando times..."
        self.banner_style = "info"

        try:
            self.times = await TimeAPI.get_all()
            if self.times:
                self.banner_text = f"{len(self.times)} times carregados"
                self.banner_style = "success"
            else:
                self.banner_text = "Nenhum time encontrado"
                self.banner_style = "info"
        except Exception as e:
            self.banner_text = f"Erro ao carregar times: {str(e)}"
            self.banner_style = "danger"
        finally:
            self.is_loading = False

    def build(self) -> rio.Component:
        list_items = []

        list_items.append(
            rio.SimpleListItem(
                text="Adicionar novo",
                secondary_text="Clique para adicionar um novo time",
                key="add_new",
                left_child=rio.Icon("material/add"),
                on_press=self.on_spawn_dialog_add_new_time,
            )
        )

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

        for i, item in enumerate(self.times):
            list_items.append(
                rio.SimpleListItem(
                    text=item.nome,
                    secondary_text=f"{item.estadio or 'Sem estádio'} - {item.cidade or 'Sem cidade'}",
                    right_child=rio.Button(
                        rio.Icon("material/delete", margin=0.5),
                        color=self.session.theme.danger_color,
                        min_width=8,
                        on_press=functools.partial(self.on_press_delete_item, i),
                    ),
                    key=str(item.id),
                    on_press=functools.partial(self.on_spawn_dialog_edit_time, item, i),
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
                if self.times
                else rio.Text("Nenhum time cadastrado")
            ),
            align_y=0,
            margin=3,
        )

    async def on_press_delete_item(self, idx: int) -> None:
        time = self.times[idx]
        if time.id and await TimeAPI.delete(time.id):
            self.times.pop(idx)
            self.banner_text = "Time foi deletado"
            self.banner_style = "danger"
            self.currently_selected_time = None
        else:
            self.banner_text = "Erro ao deletar time"
            self.banner_style = "danger"

    async def _create_dialog_item_editor(self, selected_time: Time, new_entry: bool) -> Time | None:
        selected_time_copied = selected_time.copy()

        def build_dialog_content() -> rio.Component:
            text = "Adicionar Novo Time" if new_entry else "Editar Time"

            return rio.Column(
                rio.Text(
                    text=text,
                    style="heading2",
                    margin_bottom=1,
                ),
                rio.TextInput(
                    selected_time_copied.nome,
                    label="Nome",
                    on_change=on_change_nome,
                ),
                rio.TextInput(
                    selected_time_copied.estadio or "",
                    label="Estádio",
                    on_change=on_change_estadio,
                ),
                rio.TextInput(
                    selected_time_copied.cidade or "",
                    label="Cidade",
                    on_change=on_change_cidade,
                ),
                rio.Row(
                    rio.Button(
                        "Salvar",
                        on_press=lambda: dialog.close(selected_time_copied),
                    ),
                    rio.Button(
                        "Cancelar",
                        on_press=lambda: dialog.close(selected_time),
                    ),
                    spacing=1,
                    align_x=1,
                ),
                spacing=1,
                align_y=0,
                margin=2,
                min_width=30,
            )

        def on_change_nome(ev: rio.TextInputChangeEvent) -> None:
            selected_time_copied.nome = ev.text

        def on_change_estadio(ev: rio.TextInputChangeEvent) -> None:
            selected_time_copied.estadio = ev.text

        def on_change_cidade(ev: rio.TextInputChangeEvent) -> None:
            selected_time_copied.cidade = ev.text

        dialog = await self.session.show_custom_dialog(
            build=build_dialog_content,
            modal=True,
            user_closeable=False,
        )

        return await dialog.wait_for_close()

    async def on_spawn_dialog_edit_time(self, selected_time: Time, idx: int) -> None:
        assert selected_time is not None
        result = await self._create_dialog_item_editor(selected_time=selected_time, new_entry=False)

        if result is None:
            self.banner_text = "Time não foi atualizado"
            self.banner_style = "danger"
        else:
            updated_time = await TimeAPI.update(result)
            if updated_time:
                self.times[idx] = updated_time
                self.banner_text = "Time foi atualizado"
                self.banner_style = "info"
            else:
                self.banner_text = "Erro ao atualizar time"
                self.banner_style = "danger"

    async def on_spawn_dialog_add_new_time(self) -> None:
        new_time = Time.new_empty()
        result = await self._create_dialog_item_editor(selected_time=new_time, new_entry=True)

        if result is None:
            self.banner_text = "Time não foi adicionado"
            self.banner_style = "danger"
        else:
            created_time = await TimeAPI.create(result)
            if created_time:
                self.times.append(created_time)
                self.banner_text = "Time foi adicionado"
                self.banner_style = "success"
            else:
                self.banner_text = "Erro ao adicionar time"
                self.banner_style = "danger"
