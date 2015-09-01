<?php

/*
 * To enable URL rewriting, please set the $rewriting variable on 'true'
 *
 * Ensure you have done every other steps described on
 * https://github.com/Bioshox/Raspcontrol/wiki/Enable-URL-Rewriting#configure-your-web-server
 * As that original URL is dead, here are some alternatives:
 * https://github.com/moifort/Raspcontrol-ArchLinux/wiki/Enable-URL-Rewriting
 * https://menzerath.eu/artikel/raspberry-pi-raspcontrol-installation-funktionen/
 */
$rewriting = false;

/*
 * Do NOT change the following lines
 */
error_reporting(0);
define('INDEX', './');
define('LOGIN', 'login.php');
define('FILE_PASS', '/etc/raspcontrol/database.aptmnt');

if ($rewriting) {
    define('LOGOUT', './logout');
    define('DETAILS', './details');
    define('SERVICES', './services');
    define('DISKS', './disks');
    define('GPIO', './gpio');
} else {
    define('LOGOUT', './login.php?logout');
    define('DETAILS', './?page=details');
    define('SERVICES', './?page=services');
    define('DISKS', './?page=disks');
    define('GPIO', './?page=gpio');
}
?>
