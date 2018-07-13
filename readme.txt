=== Classic Editor Addon ===
Contributors: senlin, gschoppe
Tags: gutenberg, classic editor, addon
Requires at least: 4.9
Requires PHP: 5.3
Tested up to: 4.9.7
Stable tag: 1.4.0
License: GPL-3.0+
License URI: http://www.gnu.org/licenses/gpl-3.0.txt

This free "Classic Editor Addon" plugin changes the default behaviour of the "Classic Editor" plugin; and then some.

== Description ==

> GDPR-compliant: does not collect any user data

The "Classic Editor" plugin doesn't remove Gutenberg by default. With this free addon we set the option that controls this from no-replace to replace, so no additional action is needed anymore. This is what the Classic Editor should have done out of the box.

In addition to this most basic requirement, the "Classic Editor Addon" removes the Settings link from the main Plugins page and removes the plugin's Settings from the Settings > Writing screen. Also the drop down buttons Gutenberg adds to the post type screens is replaced with the regular "Add New" button.

**Update:** With version 2.0.0 we have added a class that detects whether the main "Classic Editor" plugin already has been installed and activated. If it hasn't, that plugin can be installed with one click. The notice can also be dismissed.

Last but not least the Classic Editor Addon suppresses the Nag screen that is slated to arrive in the Dashboard with WP version 4.9.8.

The free Classic Editor Addon plugin is targeted at everyone who is not yet ready for Gutenberg and/or who does not want to bother clients with Gutenberg. Install it now on sites and by the time WP 4.9.8 and eventually 5.0 are released, the UX remains the same as you are used to!

We support this plugin exclusively through [Github](https://github.com/senlin/classic-editor-addon/issues). Therefore, if you have any questions, need help and/or want to make a feature request, please open an issue over at Github. You can also browse through open and closed issues to find what you are looking for and perhaps even help others.

Thanks for your understanding and cooperation.

If you like the Classic Editor Addon plugin, please consider leaving a [review](https://wordpress.org/support/view/plugin-reviews/classic-editor-addon?rate=5#postform). Thanks!

Classic Editor Addon by [Pieter Bos](https://so-wp.com/plugin/classic-editor-addon) and [Greg Schoppe](https://gschoppe.com).

== Frequently Asked Questions ==

= What is Gutenberg? =

Gutenberg is a new editing experience that will drop with WordPress 5.0, whether we like it or not. More information can be found on the [Gutenberg FAQ](https://wordpress.org/gutenberg/handbook/reference/faq/).

= Why this addon? Isn't the purpose of the Classic Editor plugin to disable Gutenberg? =

The "Classic Editor" plugin, by Andrew Ozz, doesn't completely disable Gutenberg without changing settings. "Classic Editor Addon" is a second plugin that fixes both of these behaviors in "Classic Editor". If you install both plugins, Gutenberg will be completely disabled, and you will not see a nag screen.

= How does this compare to other plugins that disable Gutenberg? =

Great question! "Classic Editor" is the official plugin for removing Gutenberg, and the install count is apparently being used as a metric to gauge success of the Gutenberg project. So, although other plugins exist to force-disable Gutenberg, using them doesn't properly notify the WP Core team of the number of issues users are having, that is why "Classic Editor Addon" doesn't disable Gutenberg itself, it just properly sets the options for "Classic Editor" and disables the Gutenberg Nag notice, making it easier to mass-install classic editor.

= The plugin doesn't do anything! =

Is Gutenberg active on the site and do you have the Classic Editor plugin installed? Those two are requirements for this addon plugin to do anything. If you have and the plugin still doesn't do anything, then please open a [support ticket](https://github.com/senlin/classic-editor-addon/issues).

= I have an issue with this plugin, where can I get support? =

Please open an issue on [Github](https://github.com/senlin/classic-editor-addon/issues)

== Changelog ==

= 2.0.0 =

*
* add WP Dependency Installer to facilitate with installing and activating Classic Editor plugin
* adjust min PHP version due to addition of WP Dependency Installer

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
