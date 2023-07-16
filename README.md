# Antispam Bee #

[![Build status](https://github.com/pluginkollektiv/antispam-bee/actions/workflows/tests.yml/badge.svg)](https://github.com/pluginkollektiv/antispam-bee/actions/workflows/tests.yml) [![Current Antispam Bee version](https://img.shields.io/wordpress/plugin/v/antispam-bee.svg)](https://wordpress.org/plugins/antispam-bee/) [![Number of downloads](https://img.shields.io/wordpress/plugin/dt/antispam-bee.svg)](https://wordpress.org/plugins/antispam-bee/advanced/) [![Number of active installs](https://img.shields.io/wordpress/plugin/installs/antispam-bee.svg)](https://wordpress.org/plugins/antispam-bee/advanced/) [![WordPress plugin rating](https://img.shields.io/wordpress/plugin/r/antispam-bee.svg)](https://wordpress.org/plugins/antispam-bee/#reviews) [![Donate with PayPal](https://img.shields.io/badge/PayPal-Donate-yellow.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=TD4AMD2D8EMZW)

Antispam plugin with a sophisticated toolset for effective day to day comment and linkback spam-fighting. Built with data protection and privacy in mind, and extendable with own anti-spam rules and possibility to use Antispam Bee rules for other reactions than comments and linkbacks.

## Description ##
Say Goodbye to comment spam on your WordPress blog or website. *Antispam Bee* blocks spam comments and linkbacks effectively and without captchas. It is free of charge, ad-free and compliant with European data privacy standards.

### Feature/Settings Overview ###
* Trust approved commenters.
* Trust commenters with a Gravatar.
* Consider the comment time.
* Treat BBCode links as spam.
* Validate the IP address of commenters.
* Use regular expressions.
* Search local spam database for commenters previously marked as spammers.
* Notify admins by e-mail about incoming spam.
* Delete existing spam after n days.
* Limit approval to comments/pings (will delete other comment types).
* Select spam indicators to send comments to deletion directly.
* Optionally exclude trackbacks and pingbacks from spam detection.
* Optionally spam-check comment forms on archive pages.
* Display spam statistics on the dashboard, including daily updates of spam detection rate and a total of blocked spam comments.

### Support ###
* Community support via the [support forums on wordpress.org](https://wordpress.org/support/plugin/antispam-bee)
* We don’t handle support via e-mail, Twitter, GitHub issues etc.

### Contribute ###
* Active development of this plugin is handled [on GitHub](https://github.com/pluginkollektiv/antispam-bee).
* Pull requests for documented bugs are highly appreciated.
* If you think you’ve found a bug (e.g. you’re experiencing unexpected behavior), please post at the [support forums](https://wordpress.org/support/plugin/antispam-bee) first.
* If you want to help us translate this plugin you can do so [on WordPress Translate](https://translate.wordpress.org/projects/wp-plugins/antispam-bee).
* To test the plugin on your local machine, simply run `docker-compose up` in the root folder and open `http://localhost:8081/` in your browser.

### Donate
[Donate for us via Paypal](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=TD4AMD2D8EMZW)

### Credits ###
* Author: [Sergej Müller](https://sergejmueller.github.io/)
* Maintainers: [pluginkollektiv](https://pluginkollektiv.org)

## Installation ##
* If you don’t know how to install a plugin for WordPress, [here’s how](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

### Requirements ###
* PHP 7.0 or greater
* WordPress 4.5 or greater

### Settings ###
After you have activated *Antispam Bee* the plugin will block spam comments out of the box. However, you may want to visit *Settings → Antispam Bee* to configure your custom set of anti-spam options that works best for your site.

### Privacy Notice ###
On sites operating from within the EU the option *Use a public antispam database* should not be activated for privacy reasons. When that option has been activated, *Antispam Bee* will match full IP addresses from comments against a public spam database. Technically it is not possible to encrypt those IPs, because spam databases only store and operate with complete, unencrypted IP addresses.

## Frequently Asked Questions ##

Please have a look [in the FAQ pages](https://github.com/pluginkollektiv/antispam-bee/wiki/en-FAQ).

A complete documentation is available in the [GitHub repository Wiki](https://github.com/pluginkollektiv/antispam-bee/wiki).

## Changelog ##

[Changelog](https://github.com/pluginkollektiv/antispam-bee/blob/master/CHANGELOG.md).
