# Twenty Twenty-Two

Welcome to the development repository for the default theme that will launch with WordPress 5.9.

![Flying Bird](https://user-images.githubusercontent.com/1202812/136213624-3073a915-2a72-4248-acc1-301c41dea3d4.png)

## About

Twenty Twenty-Two is designed to be the most flexible default theme ever created for WordPress. It's built for full site editing first as a [block theme](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/). The theme aims to ship with as little CSS as possible: our goal is for all theme styles to be configured through [`theme.json`](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/) and editable through Global Styles. The theme development team will work closely with [Gutenberg](https://github.com/wordpress/gutenberg) contributors to build design tools in the block editor that enable this goal.

## Contributing

If you would like to contribute code, the list of [open issues](https://github.com/WordPress/twentytwentytwo/issues) is a great place to start looking for tasks. [Pull requests](https://github.com/WordPress/twentytwentytwo/pulls) are preferred when linked to an existing issue.

Contributing is not just for developers! There are many opportunities to help with [testing](#getting-started), triage, discussion, design, building patterns and templates, and more. Please look through [open issues](https://github.com/WordPress/twentytwentytwo/issues), and join in wherever you feel most comfortable.

If you'd like to help with triage, let @jffng and @kjellr know here or in [WordPress.org's Slack instance](https://make.wordpress.org/chat/). We'll help you get set up with the ability to add labels to issues and PRs.

### Getting Started

To get started with development:

1. Set up a WordPress instance, we recommend [wp-env](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/) or [Local](https://localwp.com/) as an alternative to docker.
2. Install the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/)
3. Clone / download this repository into your `/wp-content/themes/` directory

### Tips for Contributors
  
- As stated above, a goal for the theme is to have as little CSS as possible. Much of the theme's visual treatments should be handled by the Block Editor and Global Styles. As a general rule, if multiple themes would benefit from the CSS you're considering adding, it might reasonably be provided by Gutenberg instead. Let's include clear code comments for any CSS we do include.
- Similarly, let's refrain from building any custom-built PHP or JavaScript-based workarounds for functionality that might reasonably be provided by the Block Editor. Twenty Twenty-Two will be the first widely-distributed block theme, so let's keep its code simple.
- In accordance to those last two bullets, this theme has no required build process.
- If you've helped contribute to the theme in any way, you deserve credit! Folks will be updating [CONTRIBUTORS.md](CONTRIBUTORS.md) periodically with names of contributors, but feel free to open a PR or issue if we leave someone out.

## Requirements

- Gutenberg plugin (latest)
- WordPress 5.8+
- PHP 5.6+
- License: [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) or later

Some theme features / PRs may require Gutenberg trunk and will be described or tagged accordingly.

To optionally run tests locally, you will also need:

- [Node.js](https://nodejs.org/en/)
- [Composer](https://getcomposer.org/)

You can install the test-specific development dependencies by running `npm i && composer install`. The following test commands are then available:

- `npm run lint:css` lints and autofixes where possible the CSS
- `composer run analyze [filename.php]` statically analyzes PHP for bugs
- `composer run lint` checks PHP for syntax errors
- `composer run standards:check` checks PHP for standards errors according to [WordPress coding standards](https://developer.wordpress.org/coding-standards/)
- `composer run standards:fix` attempts to automatically fix errors

## Resources

- [Twenty Twenty-Two Figma Mockups](https://www.figma.com/file/76mfUcaK4QDlrXElk8MK3H/Twenty-Twenty-Two?node-id=10%3A54)
- [Setting up a development environment](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/)
- [Block Theme documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview)
- [Global Styles & theme.json documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)

## Demo Site

There is a demo site located at [2022.wordpress.net](https://2022.wordpress.net). During the theme development process, updates to `trunk` will be brought onto the demo server within five minutes. After the theme is stable, the site will be switched to automatic updates from the WordPress.org repo.

## Timeline

The theme will be released with WordPress 5.9 and follow the key dates / milestones associated with [its development schedule](https://make.wordpress.org/core/5-9).
