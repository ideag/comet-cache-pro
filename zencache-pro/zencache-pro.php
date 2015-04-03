<?php
/*
Version: 150403
Text Domain: zencache
Plugin Name: ZenCache Pro
Network: true

Author: WebSharks, Inc.
Author URI: http://www.websharks-inc.com/

Plugin URI: http://zencache.com/
Description: ZenCache is an advanced WordPress caching plugin inspired by simplicity. Speed up your site (BIG time!) with a reliable and fast WordPress cache.
*/
if(!defined('WPINC')) // MUST have WordPress.
	exit('Do NOT access this file directly: '.basename(__FILE__));

$GLOBALS['wp_php_rv'] = '5.3.2'; // Require PHP v5.3.2+.
if(require(dirname(__FILE__).'/submodules/wp-php-rv/wp-php-rv.php'))
	require_once dirname(__FILE__).'/zencache-pro.inc.php';
else wp_php_rv_notice('ZenCache Pro');
