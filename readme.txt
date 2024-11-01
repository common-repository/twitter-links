=== Plugin Name ===
Contributors: Speedboxer
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=991603
Tags: twitter, comments
Requires at least: 2.6
Tested up to: 2.7
Stable tag: 1.0

Converts Twitter usernames mentioned in comments (eg. @mattfreedman) with a link to the mentioned user's Twitter profile page.

== Description ==

This plugin will convert valid [Twitter](http://twitter.com/ "Twitter") usernames mentioned in comments into a link to their Twitter profile page. For example, if somebody mentions "@mattfreedman" in their comment, this plugin will check with Twitter to see if the user "mattfreedman" exists (which is does) and when it does, it will convert it into "<a href="http://twitter.com/mattfreedman">@mattfreedman</a>".

**Please note: As this plugin converts usernames on the fly (*whenever and everytime* somebody views the comments), and checks Twitter for every username (to ensure it's valid), I *strongly* recommend using a caching plugin such as [WP Super Cache](http://wordpress.org/extend/plugins/wp-super-cache/ "WP Super Cache"). Which will not only lessen the load on Twitter's servers, but also speed up page loads.**

Although it says this plugin requires WordPress 2.6, I see no reason why it wouldn't work with earlier versions, I just haven't tested it with earlier version.

*This plugin requires cURL to be installed on your server, and has only been tested with PHP 5.2.x.*

== Installation ==

To install this plugin, please follow these instructions:

1. Download and extract the ZIP archive.
1. Upload `twitter-links.php` to your `wp-content/plugins/` folder.
1. In your WordPress administrative panel, go to Plugins, scroll down to **Twitter Links** and click *Activate* to the right of it.
