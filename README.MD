# osTicket-SMIS

<a href="http://osticket.com"><img src="http://osticket.com/sites/default/files/osTicket.jpg"
align="left" hspace="10" vspace="6"></a>

**osTicket-SMIS** is based on <a href="https://github.com/osTicket/osTicket">osTicket</a>.
This version is specifically designed for the <a href="http://www.smis.ch/">SMIS</a>.

## Requirements

* Apache or HTTP server running Microsoft® IIS
* PHP version 5.6
* mysqli extension for PHP
* MySQL database version 5.0 or greater

### Recommendations
* gd, gettext, imap, json, mbstring, and xml extensions for PHP
* APC module enabled and configured for PHP

# Clone the project (developer)

`https://github.com/mchavaillaz/osTicket-SMIS.git`

# Deploy the newest version

Download the <a href="https://github.com/mchavaillaz/osTicket-SMIS/releases/latest">latest version of osTicket-SMIS</a> and extract the content in your webserver.<br>
You can now access osTicket-SMIS and follow the installation steps at the url:
   
	http://localhost/osTicket-SMIS/setup/

# Upgrade from the version 1.0.0 to the 1.0.1

1. Backup the file `/include/ost-config.php` of the version 1.0.0
2. Download the <a href="https://github.com/mchavaillaz/osTicket-SMIS/releases/latest">latest version of osTicket-SMIS</a>
3. Extract the content in your webserver
4. Copy the backup file (point 1) into the new version 1.0.1 under `/include/ost-config.php`

# Upgrade from the version 1.0.1 to the 1.0.2

1. Backup the file `/include/ost-config.php` of the version 1.0.1
2. Download the <a href="https://github.com/mchavaillaz/osTicket-SMIS/releases/latest">latest version of osTicket-SMIS</a>
3. Extract the content in your webserver
4. Copy the backup file (point 1) into the new version 1.0.1 under `/include/ost-config.php`

# Upgrade from the version 1.0.2 to the 1.0.3

1. Backup the file `/include/ost-config.php` of the version 1.0.2
2. Download the <a href="https://github.com/mchavaillaz/osTicket-SMIS/releases/latest">latest version of osTicket-SMIS</a>
3. Extract the content in your webserver
4. Copy the backup file (point 1) into the new version 1.0.3 under `/include/ost-config.php`

# Release new version

Create a new release with Github.<br>
Tutorial available <a href="https://help.github.com/articles/creating-releases/">here</a>.

# Urls

After the installation, osTicket-iQey is available at the following urls:

	http://localhost/osTicket-SMIS (user)
	http://localhost/osTicket-SMIS/scp (admin)

# i18n

The osTicket-SMIS already contains the FR/DE/EN/IT languages. At the moment only the FR and DE are enable and translated.

Other language .phar (php archive) are available <a href="osticket.com/download">here</a>.

## Text translated in admin part

Certain page/text can be directly translated in the admin part.

## Text translated in the code

The translated texts are contained in a phar (php archive) file under `/include/i18n/XX.phar`.

Most of the texts have been translated in messages.mo.php files (key, value).<br>

### How to add/edit texts?

Edit the file `/include/i18n_working_directory/XX/LC_MESSAGES/messages.mo.php` where **XX** is **fr/de/it**.

After editing, build a .phar with you changes.

### How to add new language and add/edit texts? 

Other language .phar (php archive) are available <a href="osticket.com/download">here</a>.

1. Download the .phar you want and save it under `/include/i18n_working_directory/`
2. UnPhar the .phar using the following command line `php -r '$phar = new Phar("XX.phar"); $phar->extractTo("./MyDirectory");'`
3. Edit the file `/include/i18n_working_directory/XX/LC_MESSAGES/messages.mo.php`
4. Build a .phar with your changes

### How to build a .phar with my changes?

Run the command `php /include/i18n_working_directory/build-phar.php`

The configuration for the build is in  `/include/i18n_working_directory/build_phar_config.json`

!! macOS High Sierra uses php7 but osTicket requires php56 !!

Install and configure multiple php versions on macOS High Sierra --> https://getgrav.org/blog/macos-sierra-apache-multiple-php-versions

Build the .phar using php56 like this:

* Go to the directory `/include/i18n_working_directory`
* Build the .phar `/usr/local/Cellar/php56/5.6.33_9/bin/php build-phar.php`

### How to use translated text in a page?

`<?php echo __('KEY OF YOU TEXT'); ?>`

# Automatic email fetching

The ticket system is able to fetch email automatically and create new ticket or append ticket thread to existing ticket.

This feature required a cron job on the server side. All config details are available [here](http://osticket.com/wiki/POP3/IMAP_Setting_Guide).

# FAQ with dynamic icons

You can use a specific icon dynamically in the FAQ admin page for a FAQ category using the following syntax: 

`ICONXXX!!My Category` where XXX is the number of the icon to use.

At the moment only one icon is available the "ICON1"

# Help

Visit the [wiki](http://osticket.com/wiki/Home) or the [forum](http://osticket.com/forums/) of osTicket.

# License

osTicket is released under the GPL2 license. See the included LICENSE.txt file for the gory details of the General Public License.

osTicket is supported by several magical open source projects including:

* [Font-Awesome](http://fortawesome.github.com/Font-Awesome/)
* [HTMLawed](http://www.bioinformatics.org/phplabware/internal_utilities/htmLawed)
* [jQuery dropdown](http://labs.abeautifulsite.net/jquery-dropdown/)
* [jsTimezoneDetect](http://pellepim.bitbucket.org/jstz/)
* [mPDF](http://www.mpdf1.com/)
* [PasswordHash](http://www.openwall.com/phpass/)
* [PEAR](http://pear.php.net/package/PEAR)
* [PEAR/Auth_SASL](http://pear.php.net/package/Auth_SASL)
* [PEAR/Mail](http://pear.php.net/package/mail)
* [PEAR/Net_SMTP](http://pear.php.net/package/Net_SMTP)
* [PEAR/Net_Socket](http://pear.php.net/package/Net_Socket)
* [PEAR/Serivces_JSON](http://pear.php.net/package/Services_JSON)
* [php-gettext](https://launchpad.net/php-gettext/)
* [phpseclib](http://phpseclib.sourceforge.net/)
* [Spyc](http://github.com/mustangostang/spyc)
