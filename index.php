<?php
/**
 * Plugin Name: 		Progresso NO Nags
 * Version:     		1.0.0
 * Description:			Free WordPress plugin that removes some WP Nags
 * Network:     		true

 * Author:				Progresso srl
 * Author URI:  		https://www.progresso.srl

 * Requires at least:	4.9
 * Tested up to:		5.2.2

 * License:    			GPL-3.0+
 * License URI:			http://www.gnu.org/licenses/gpl-3.0.txt

 * Text Domain: 		progresso-no-nags
 */

// don't load the plugin file directly
if (!defined('ABSPATH')) exit;

require_once __DIR__ . '/libraries/tgmpa/tgm-init.php';

add_action('in_admin_header', 'progresso_no_nags_noticies');
function progresso_no_nags_noticies() {
    remove_action('admin_notices', 'bsf_notices', 1000);
    remove_action('network_admin_notices', 'bsf_notices', 1000);
}

// load the plugin update checker
function autoupdater() {
    $pluginUpdateChecker = PROGRESSO_FRAMEWORK_PATH . '/libraries/plugin-update-checker/v4p7/plugin-update-checker.php';
    if (file_exists($pluginUpdateChecker)) {
        require_once($pluginUpdateChecker);
        Puc_v4p7_Factory::buildUpdateChecker(
            'https://github.com/progressosrl/progresso-no-nags/',
            __FILE__,
            'progresso-no-nags-update'
        );
    }
}
if (defined('PROGRESSO_FRAMEWORK_PATH')) {
    autoupdater();
}
