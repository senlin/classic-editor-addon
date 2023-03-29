=== Classic Editor + ===
Contributors: senlin, gschoppe
Tags: gutenberg, block editor, classic editor, wordpress 5.0, woocommerce, classic widgets
Requires at least: 4.9
Requires PHP: 5.6
Tested up to: 6.2
Stable tag: 4.2.0
License: GPL-3.0+
License URI: http://www.gnu.org/licenses/gpl-3.0.txt

The "Classic Editor +" plugin disables the block editor, removes enqueued scripts/styles and brings back classic Widgets.

== Description ==

> GDPR-compliant: does not collect any user data

The free "Classic Editor +" plugin is targeted at everyone who does not want to use the WP Block Editor (Gutenberg), introduced in WordPress 5.0. Install it now on sites and the UX remains the same as you are used to without redundant styling being added to the frontend of your site!

<strong>What's New:</strong>
If WPML is active on your site: remove blocks stylesheet loaded regardless of whether site uses Block Editor

This plugin simply disables the WP Block Editor, removes any and all styling from both front- and backend and disables the block editor for widgets too.

And if WooCommerce has been installed on the site, "Classic Editor +" removes the block styles of that plugin too.

There are no Settings, it simply does what it says on the label.

Therefore I highly recommend installing this "Classic Editor +" plugin. 

I support this plugin exclusively through [Github](https://github.com/senlin/classic-editor-addon/issues). Therefore, if you have any questions, need help and/or want to make a feature request, please open an issue here. You can also browse through open and closed issues to find what you are looking for and perhaps even help others.

Thanks for your understanding and cooperation.

If you like the "Classic Editor +" plugin, please consider leaving a [review](https://wordpress.org/support/view/plugin-reviews/classic-editor-addon?rate=5#postform). Thanks!

"Classic Editor +" by [Pieter Bos](https://so-wp.com/plugin/classic-editor-addon) and [Greg Schoppe](https://gschoppe.com).

== Frequently Asked Questions ==

= What is the WP block editor? =

The release of WordPress 5.0 came with a replacement of the TinyMCE editor you had gotten used to for adding or editing content. Some find it an improvement, others don't. More information can be found on the [WP 5.0 release post](https://wordpress.org/news/2018/12/bebo/).

= Why this plugin? Isn't the purpose of the Classic Editor plugin to disable the new block editor? =

The Classic Editor plugin does not remove any of the frontend styling, even when one selects the option to disable the block editor. In terms of site optimisation that is not good practice.
This "Classic Editor +" simply removes the block editor and all its styling from both frontend and backend and if your site uses WooCommerce, it also removes block styling related to that from the frontend.

= Do I still need the Classic Editor plugin on my site?  =

Version 4.0 of the "Classic Editor +" plugin has been a complete rewrite (and simplification) and it is no longer depending on the Classic Editor plugin. When the latter is active, it will be deactivated and then you can safely remove it.

= I have an issue with this plugin, where can I get support? =

Please open an issue on [Github](https://github.com/senlin/classic-editor-addon/issues)

== Changelog ==

= 4.2.0 =

* March 29, 2023
* Remove blocks stylesheet loaded by WPML (if WPML is active)

= 4.1.1 =

* February 8, 2023
* Remove global styles and enqueueing of classic-themes.min.css

= 4.1.0 =

* February 8, 2023
* Make things work again by replacing `wp_enqueue_scripts` with `enqueue_block_assets`

= 4.0.2 =

* November 23, 2022
* rename to prevent conflicts with other plugin

= 4.0.1 =

* November 23, 2022
* use consistent function prefixes
* change FAQ readme

= 4.0 =

* November 22, 2022
* complete rewrite where dependency on Classic Editor plugin is removed
* rename plugin

= 3.1.0 =

* October 27, 2022
* integrate Classic Widgets filters

= 3.0.1 =

* January 24, 2022
* adjust link to plugin search page

= 3.0.0 =

* January 24, 2022
* replaced dependency library with simple dependency check/notice, due to many issues with 2.6.4 security update

= 2.6.4 =

* January 24, 2022
* update WP Dependency Installer library
* tested up to WP 5.9

= 2.6.3 =

* August 3, 2020
* rollback removal of WooCommerce block-ui scripts

= 2.6.2 =

* August 1, 2020
* remove WooCommerce block-ui scripts
* update WP Dependency Installer
* tested up to WP 5.5.0

= 2.6.1 =

* March 5, 2020
* update WP Dependency Installer to 3.0.0

= 2.6.0 =

* November 14, 2019
* update WP Dependency Installer to 2.0.0
* increase minimum PHP version to 5.6 (requirement of WP Dependency Installer)
* WP 5.3 compatible fixes [this issue](https://wordpress.org/support/topic/wordpress-v5-3-errors/)

= 2.5.0 =

* October 11, 2019
* add function that removes the 1 block editor style call from the `<head>` section of your site when WooCommerce is running

= 2.4.0 =

* January 22, 2019
* add function that removes the 2 block editor style calls from the `<head>` section of your site

= 2.3.1 =

* December 17, 2018
* increase minimum PHP version to 5.4 due to introduction new shorthand syntax of WP Dependency Installer update in 2.3.0

= 2.3.0 =

* December 14, 2018
* version update WP Dependency Installer
* add parameter `"optional": false` as a workaround to fix [issue #4](https://github.com/senlin/classic-editor-addon/issues/4)

= 2.2.0 =

* December 12, 2018
* rewrite of function that removes settings of the Classic Editor plugin

= 2.1.1 =

* October 25, 2018
* fix typo which addresses [issue #3](https://github.com/senlin/classic-editor-addon/issues/3)

= 2.1.0 =

* August 28, 2018
* remove functions that have become redundant since 0.0.4 release of Classic Editor plugin
* rewrite readme files

= 2.0.0 =

* July 16, 2018
* add WP Dependency Installer to facilitate with installing and activating Classic Editor plugin (changed color of admin notice to blue)
* adjust minimum PHP version (to 5.3) due to addition of WP Dependency Installer

= 1.4.0 =

* July 12, 2018
* fix [issue #2](https://github.com/senlin/classic-editor-addon/issues/2)
* adjust readme text and FAQs

= 1.3.0 =

* July 8, 2018
* release of plugin on WordPress Plugin Directory, ready for the world :)

= 1.2.0 =

* early July, 2018
* more feature/function/code improvements by both Pieter &amp; Greg

= 1.1.0 =

* March 25-30, 2018
* [Forked and improved](https://gist.github.com/gschoppe/ce88a7821764ef11803a5c64350078b6/570ed7cdad511d896dbd510e281aed796b3672e2) by Greg

= 1.0.0 =

* February 3, 2018
* Released as [code snippet](https://gist.github.com/senlin/691c5f06459857f57247dc92f7ec1406/6f4091caf458fbec70b33df5d136d66e8e3b6b29)

== Upgrade Notice ==

= 3.1.0 =

* includes Classic Widgets
