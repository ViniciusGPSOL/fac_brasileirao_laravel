from __future__ import annotations

from pathlib import Path

import rio

# Define a theme for Rio to use.
#
# You can modify the colors here to adapt the appearance of your app or website.
# The most important parameters are listed, but more are available! You can find
# them all in the docs
#
# https://rio.dev/docs/api/theme
theme = rio.Theme.from_colors(
    primary_color=rio.Color.from_hex("01dffdff"),
    secondary_color=rio.Color.from_hex("0083ffff"),
    mode="dark",
)


# Create the Rio app
app = rio.App(
    # build=lambda: rio.PageView(grow_y=True),
    name="frontend",
    theme=theme,
    assets_dir=Path(__file__).parent / "assets",
)
