=== Classic Editor Addon ===
Contributors: senlin, gschoppe
Tags: gutenberg, classic editor, addon
Requires at least: 4.9
Requires PHP: 5.3
Tested up to: 4.9.8
Stable tag: 2.1.0
License: GPL-3.0+
License URI: http://www.gnu.org/licenses/gpl-3.0.txt

This free "Classic Editor Addon" plugin makes sure that Gutenberg cannot be accidentally activated even while the "Classic Editor" plugin is active.

== Description ==

> GDPR-compliant: does not collect any user data

The free Classic Editor Addon plugin is targeted at everyone who is not yet ready for Gutenberg and/or who does not want to bother clients with Gutenberg. Install it now on sites and by the time WP 5.0 is released, the UX remains the same as you are used to!

The reason we released the "Classic Editor Addon" plugin is because in the beginning the "Classic Editor" plugin did not what it said on the label.

Since version 0.0.4 of the "Classic Editor" plugin, it finally set the default setting to actually using the Classic Editor. It still contains a Settings page though and if the purpose of people is to get the Classic Editor instead of using Gutenberg, then we don't see the need for such a Settings page.

Also, if we look at developers protecting the sites of their clients with the Classic Editor, they certainly don't want their clients to accidentally turn off the Classic Editor as Gutenberg adds a lot of undesirable comments, tags and what not to the content.

Therefore we highly recommend installing this "Classic Editor Addon" plugin, which will auto-install the "Classic Editor" plugin. It  removes the Settings link from the main Plugins page and removes the plugin's Settings from the Settings > Writing screen.

We support this plugin exclusively through [Github](https://github.com/senlin/classic-editor-addon/issues). Therefore, if you have any questions, need help and/or want to make a feature request, please open an issue over at Github. You can also browse through open and closed issues to find what you are looking for and perhaps even help others.

Thanks for your understanding and cooperation.

If you like the Classic Editor Addon plugin, please consider leaving a [review](https://wordpress.org/support/view/plugin-reviews/classic-editor-addon?rate=5#postform). Thanks!

Classic Editor Addon by [Pieter Bos](https://so-wp.com/plugin/classic-editor-addon) and [Greg Schoppe](https://gschoppe.com).

== Frequently Asked Questions ==

= What is Gutenberg? =

Gutenberg is a new editing experience that will drop with WordPress 5.0, whether we like it or not. More information can be found on the [Gutenberg FAQ](https://wordpress.org/gutenberg/handbook/reference/faq/).

= Why this addon? Isn't the purpose of the Classic Editor plugin to disable Gutenberg? =

When it was released initially, the "Classic Editor" plugin, by Andrew Ozz, didn't completely disable Gutenberg without changing settings. Since version 0.0.4 it does, but it still comes with Settings. The "Classic Editor Addon" is a second plugin that makes sure the Settings are gone, so they cannot be accidentally triggered and "bring down the skies".

= How does this compare to other plugins that disable Gutenberg? =

Great question! "Classic Editor" is the official plugin for removing Gutenberg, and the install count is apparently being used as a metric to gauge success of the Gutenberg project. So, although other plugins exist to force-disable Gutenberg, using them doesn't properly notify the WP Core team of the number of issues users are having, that is why "Classic Editor Addon" doesn't disable Gutenberg itself, it just removes the Settings page of the "Classic Editor" plugin, making it easier to mass-install classic editor.

= The plugin doesn't do anything! =

Is Gutenberg active on the site and do you have the Classic Editor plugin installed? Those two are requirements for this addon plugin to do anything. If you have and the plugin still doesn't do anything, then please open a [support ticket](https://github.com/senlin/classic-editor-addon/issues).

= I have an issue with this plugin, where can I get support? =

Please open an issue on [Github](https://github.com/senlin/classic-editor-addon/issues)

== Changelog ==

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
