# Twenty Twenty-Two
The development repository for the default theme that will ship alongside WordPress 5.9. 

## About
Twenty Twenty-Two is designed to be the most flexible default theme ever created for WordPress. It's built for full site editing first as a [block theme](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/). The theme aims to ship with as little CSS as possible: our goal is for all theme styles to be configured through theme.json and editable through Global Styles. The theme development team will work closely with [Gutenberg](https://github.com/wordpress/gutenberg) contributors to build design tools in the block editor that enable this goal. 

## Contributing
There are several ways to contribute: 

1. [Testing](#getting-started) the theme
2. Creating and participating in [issues](https://github.com/WordPress/twentytwentytwo/issues)
3. Contributing code via [pull requests](https://github.com/WordPress/twentytwentytwo/pulls). Pull requests are preferred when linked to an existing issue.

## Getting Started
To view the design, visit this [public Figma file](https://www.figma.com/file/wok5YcSPh1iTLAavNJd5ax/Twenty-Twenty-Two?node-id=624%3A3758).

To get started with development:

1. Set up a WordPress instance, we recommend [wp-env] or [Local](https://localwp.com/) as an alternative to docker.
2. Install the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/)
3. Clone / download this repository into your `/wp-content/themes/` directory

#### Requirements
- Gutenberg plugin (latest)  
- WordPress 5.8+
- PHP 5.6+
- License: [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) or later 

Some theme features / PRs may require Gutenberg trunk and will be described or tagged accordingly. 

#### Resources
- [Setting up a development environment](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/)
- [Block Theme documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview)
- [Global Styles & theme.json documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)

#### Timeline
The theme will be released with WordPress 5.9 and follow the key dates / milestones associated with [its development schedule](https://make.wordpress.org/core/5-9). 