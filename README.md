# Custom School Theme

A WordPress child theme by Bevan Matsacos.

> **Disclosure:** Custom School Theme is a **child theme of [Education Center](https://wordpress.org/themes/education-center/)** by [Good Looking Themes](https://glthemes.com/). It is built from their **[School Center](https://wordpress.org/themes/school-center/) 1.0.2** child theme, with my own changes added on top. Education Center must be installed for this theme to work. All original code remains the work of Good Looking Themes and is used under the GNU GPL v3 (see [Credits](#credits)). This project is not affiliated with or endorsed by Good Looking Themes.

## What's different from School Center

- **Homepage:** sections run in the order banner box, about, course features, CTA, featured, video, blog, followed by the content of the page titled "Home".
- **Inserted page content:** sits in the normal page width (`.container`) with padding above and below.
- **Custom Front Page template:** a page template that shows the content of another page (ID 25) followed by the homepage sections.
- **Compass social icon:** replaces the Digg icon in the social links (`includes/social-icons.php`, overriding the parent's pluggable functions).
- **Footer:** stays at the bottom of the screen on short pages.
- **No automatic updates:** `Update URI: false` stops WordPress from replacing this theme with an update. The Education Center parent theme can still update safely.
- **Customizer settings:** on first activation, the theme copies your existing School Center (or Education Center) Customizer settings, because WordPress stores them separately for each theme.

## Install

1. Install and update the **Education Center** theme (Appearance → Themes → Add New).
2. Zip the `custom-school-theme` folder, or download this repo as a zip and rename the folder inside to `custom-school-theme`.
3. Go to Appearance → Themes → Add New → Upload Theme, choose the zip, then activate **Custom School Theme**.

Requires WordPress 6.0+ and PHP 8.0+.

## Credits

- **Education Center** (parent theme) and **School Center** (the child theme this is built from), Copyright 2021–2022 [Good Looking Themes](https://glthemes.com/), licensed under the GNU GPL v3 or later. The original notices and third-party credits are kept in [`readme.txt`](readme.txt).
- Changes by Bevan Matsacos, 2026.

## License

GNU General Public License v3 or later. See [LICENSE](LICENSE). As a derivative of GPL-licensed themes, this theme is distributed under the same license.
