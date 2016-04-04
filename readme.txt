=== smart-bbboing ===
Contributors: bobbingwide
Donate link: http://www.oik-plugins.com/oik/oik-donate/
Tags: shortcodes, smart, lazy
Requires at least: 3.5
Tested up to: 3.7.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: smart-bbboing
Domain Path: /languages/

== Description ==
Retranslate all localized strings into the bbboing language, regardless of the current locale.


== Installation ==
1. Upload the contents of the smart-bbboing plugin to the `/wp-content/plugins/smart-bbboing' directory
1. Activate the smart-bbboing plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==
= What's this for? =
Demonstrates implementing the gettext() filter.

= Why smart-bbboing? =
2 reasons.
1. It's smarter than bbboing
2. Another entry in the Silver Bullet list

= Is it smart? =
Not really. 2 reasons
1. It's a simple API implemented by another plugin
2. It doesn't get invoked early enough in the process to be of any use on some pages.
That's because it responds to "bbboing_loaded" which is invoked after "oik_loaded"
and a number of strings  have already been translated, well before we got invoked.

== Screenshots ==
1. smart-bbboing in action

== Upgrade Notice ==
= 0.1 =
Currently depends on bbboing v1.5 

== Changelog == 
= 0.1 =
* Added: New plugin - for a bit of fun and to help demonstrate that "I'm probably doing it wrong"

== Further reading ==
If you want to read more about the oik plugins then please visit the
[oik plugin](http://www.oik-plugins.com/oik) 
**"the oik plugin - for often included key-information"**

