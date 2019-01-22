=== Classic Editor Addon ===
Contributors: senlin, gschoppe
Tags: gutenberg, block editor, classic editor, addon, wordpress 5.0
Requires at least: 4.9
Requires PHP: 5.4
Tested up to: 5.0.3
Stable tag: 2.4.0
License: GPL-3.0+
License URI: http://www.gnu.org/licenses/gpl-3.0.txt

This free "Classic Editor Addon" plugin makes sure that the new block editor cannot be accidentally activated even while the "Classic Editor" plugin is active.

== Description ==

> GDPR-compliant: does not collect any user data

The free Classic Editor Addon plugin is targeted at everyone who is not yet ready for the new editing experience that has been introduced in WordPress 5.0. Install it now on sites and the UX remains the same as you are used to!

<strong>What's New:</strong>
The new block editor adds 2 sets of styles to the `<head>` section of your site. But since you have the Classic Editor Addon installed, the calls to those styles are a complete waste. With version 2.4.0 your site will not call these stylesheets anymore. Win!
Credit for this suggestion go to [Mitchell Miller](https://github.com/mitchelldmiller) who brought this to our attention. Thanks Mitchell!

Please pay attention that the minimum PHP version to use our plugin is <strong>5.4</strong>.

The reason we released the "Classic Editor Addon" plugin is because in the beginning the "Classic Editor" plugin did not what it said on the label.

Since version 0.0.4 of the "Classic Editor" plugin, it finally set the default setting to actually using the Classic Editor. It still contains a Settings page though and if the purpose of people is to get the Classic Editor instead of using the new block editor, then we don't see the need for such a Settings page.

Also, if we look at developers protecting the sites of their clients with the Classic Editor, they certainly don't want their clients to accidentally turn off the Classic Editor as the new block editor adds a lot of undesirable comments, tags and what not to the content.

Therefore we highly recommend installing this "Classic Editor Addon" plugin, which will automatically install the “Classic Editor” plugin and remove its settings.

We support this plugin exclusively through [Github](https://github.com/senlin/classic-editor-addon/issues). Therefore, if you have any questions, need help and/or want to make a feature request, please open an issue here. You can also browse through open and closed issues to find what you are looking for and perhaps even help others.

Thanks for your understanding and cooperation.

If you like the Classic Editor Addon plugin, please consider leaving a [review](https://wordpress.org/support/view/plugin-reviews/classic-editor-addon?rate=5#postform). Thanks!

Classic Editor Addon by [Pieter Bos](https://so-wp.com/plugin/classic-editor-addon) and [Greg Schoppe](https://gschoppe.com).

== Frequently Asked Questions ==

= What is this new block editor that ships with WordPress 5.0? =

The release of WordPress 5.0 comes with a replacement of the TinyMCE editor you have gotten used to. Some find it an improvement, others don't. More information can be found on the [WP 5.0 release post](https://wordpress.org/news/2018/12/bebo/).

= Why this addon? Isn't the purpose of the Classic Editor plugin to disable the new block editor? =

When it was released initially, the "Classic Editor" plugin, by Andrew Ozz and other "WordPress Contributors", didn't completely disable the new block editor without changing settings. Since version 0.0.4 it does, but it still comes with Settings. The "Classic Editor Addon" is a second plugin that makes sure the Settings are gone, so they cannot be accidentally triggered and "bring down the skies".

= How does this compare to other plugins that disable the new block editor? =

Great question! "Classic Editor" is the official plugin for removing the new block editor, and the install count is apparently being used as a metric to gauge success of the project. So, although other plugins exist to force-disable the new block editor, using them doesn't properly notify the WP Core team of the number of issues users are having, that is why "Classic Editor Addon" doesn't disable the new block editor itself, it just removes the Settings page of the "Classic Editor" plugin, making it easier to mass-install the "Classic Editor" plugin.

= The plugin doesn't do anything! =

Has the site been updated to WordPress 5.0 and do you have the Classic Editor plugin installed? Those two are requirements for this addon plugin to do anything. If you have and the plugin still doesn't do anything, then please open a [support ticket](https://github.com/senlin/classic-editor-addon/issues).

= I have an issue with this plugin, where can I get support? =

Please open an issue on [Github](https://github.com/senlin/classic-editor-addon/issues)

== Changelog ==

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

= 2.0.0 =

* now the plugin requires PHP 5.3 due to addition of WP Dependency Installer
