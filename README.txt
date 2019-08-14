== Plugin ==
Contributors: Progresso srl
Donate link: http://www.progresso.srl/
Tags: progresso, nags
Requires at least: 4.5
Tested up to: 5.2.2
Stable tag: 5.2.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin for Deleting annoying nags


== Description ==

This plugins deletes annoying nags


== Installation ==

You can install it by one of the following methods:
* Uploading the plugin files to the `/wp-content/plugins/progresso-no-nags` directory.
* Downloading the ZIP file and then uplaoding it using the admin panel
* By using TGMPA with the following source
https://github.com/progressosrl/progresso-no-nags/archive/master.zip


== Update the libraries ==

In order to update the package you have to:
1. fork the repository
2. set config/plugin.php as "development" environment
3. composer update the library
4. compile everything with `grunt build`
5. update the version in config/plugin.php and set config/plugin.php as "production" environment
6. git push the changes in the master branch
7. create a pull request

The admin has to:
1. accept the pull request
2. create a new "release"


== Changelog ==

= 1.0.0 =
* First release
