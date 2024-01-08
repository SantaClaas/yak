claas.dev


## How it works
1. Dev Container VS Code extension starts up docker and creates images with Dockerfile and docker compose
2. Docker mounts secret files containing secrets as decribed in docker compose
3. Workspace directory is mounted
4. Dev container runs post create command and copies wordpress config to wordpress directory
    - wordpress config refers to environment variables to find secrets mounted by docker
5. Wordpress config is run and reads secrets from mounted docker secrets files and connects to PlanetScale database

A custom theme based on \_tw

## TODO

- 5 sub-pages
  - _do blog entries count?_
- 2 external plugins or ~~1 developed plugin~~ ✅
  - [Classic Editor](https://wordpress.org/plugins/classic-editor/) ✅
    - _As I am developing a classic theme, the classic editor makes editing it easier_
  - [External Markdown](https://wordpress.org/plugins/external-markdown/) ✅
    - _I prefer git as version control system to manage my plain text content_
  - ~~Menu icons (not working)~~
    - _Tried it, didn't work because upload of SVGs bugs out so I just injected the SVG markup in the label_
- 2 Social Media integrations ALMOST
  - Mastodon
  - Reddit
  - _was ist eine "gängige Social Media Platform"?_
  - _was ist eine "integration"?_
- 2 Languages
  - English
  - German
- Theme based on free template
  - _Used [_tw](https://underscoretw.com/)_
  - With at least 3 changes
    - A Picture or background pattern
      - A background picture or just a picture in the theme?
    - Color of an element (e.g. clicked links)
    - Font size or type




## Quickstart

### Installation

1. Move this folder to `wp-content/themes` in your local development environment
2. Run `npm install && npm run dev` in this folder
3. Activate this theme in WordPress

### Development

4. Run `npm run watch`
5. Add [Tailwind utility classes](https://tailwindcss.com/docs/utility-first) with abandon

### Deployment

6. Run `npm run bundle`
7. Upload the resulting zip file to your site using the “Upload Theme” button on the “Add Themes” administration page

Or [deploy with the tool of your choice](https://underscoretw.com/docs/deployment/#h-other-deployment-options)!

## Full Documentation

### Fundamentals

* [Installation](https://underscoretw.com/docs/installation/)
  Generate your custom theme, install it in WordPress and run your first Tailwind builds
* [Development](https://underscoretw.com/docs/development/)
  Watch for changes, build for production and learn more about how _tw, WordPress and Tailwind work together
* [Deployment](https://underscoretw.com/docs/deployment/)
  Share your new WordPress theme with the world
* [Troubleshooting](https://underscoretw.com/docs/troubleshooting/)
  Find solutions to potential issues and answers to frequently asked questions

### In Depth

* [Using Tailwind Typography](https://underscoretw.com/docs/tailwind-typography/)
  Customize front-end and back-end typographic styles
* [JavaScript Bundling with esbuild](https://underscoretw.com/docs/esbuild/)
  Install and bundle JavaScript libraries (very quickly)
* [Linting and Code Formatting](https://underscoretw.com/docs/linting-code-formatting/)
  Catch bugs and stop thinking about formatting

### Extras

* [On Tailwind and WordPress](https://underscoretw.com/docs/wordpress-tailwind/)
  Understand how WordPress and Tailwind work together
* [Managing Styles for Custom Blocks](https://underscoretw.com/docs/custom-blocks/)
  Learn strategies for using Tailwind in theme-specific custom blocks
* [Setting Up Browsersync](https://underscoretw.com/docs/browsersync/)
  Add live reloads and synchronized cross-device testing to your workflow
