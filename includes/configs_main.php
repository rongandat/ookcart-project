<?php
error_reporting(1);
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'ookcash_ookcash');
define('DB_SERVER_PASSWORD', 'ookcash@#cya');
define('DB_DATABASE', 'ookcash_main');



define('HTTP_SERVER', 'http://ookcash.com');
define('HTTPS_SERVER', 'https://ookcash.com');
define('ENABLE_SSL', 'true');
define('HTTP_COOKIE_DOMAIN', 'ookcash.com');
define('HTTPS_COOKIE_DOMAIN', 'ookcash.com');
define('HTTP_COOKIE_PATH', '/');
define('HTTPS_COOKIE_PATH', '/');

define('_HTTP_SITE_ROOT', HTTP_SERVER);
define('_HTTPS_SITE_ROOT', HTTPS_SERVER);

define('_SITE_ROOT', '/home/ookcash/public_html/');
define('_FRONT_END_SITE_ROOT', '/home/ookcash/public_html/');

define('_INCLUDES_DIR', _SITE_ROOT . 'includes/');
define('_MODULES_DIR', _INCLUDES_DIR . 'modules/');
define('_FUNCTIONS_DIR', _INCLUDES_DIR . 'functions/');
define('_CLASSES_DIR', _INCLUDES_DIR . 'classes/');
define('_BOXES_DIR', _INCLUDES_DIR . 'boxes/');
define('_IMAGES_WS_DIR', 'images/');
define('_IMAGES_ROOT', _SITE_ROOT . _IMAGES_WS_DIR);
define('_IMAGE_SITE_URL', _HTTP_SITE_ROOT . '/images/');
define('_IMAGESSL_SITE_URL', _HTTPS_SITE_ROOT . '/images/');

define('_PAGE_EXTENDSION', '.php');
define('_TEMPLATE_EXTENDSION', '.html');

define('_DEFAULT_LANGUAGE', 'english');
define('_LANGUAGE_DIR', _SITE_ROOT . 'languages/');

define('STORE_SESSIONS', 'mysql');
?>