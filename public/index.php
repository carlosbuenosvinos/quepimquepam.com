<?php
/**
 * Cbz
 *
 * Copyright (C) 2009 Carlos Buenosvinos Zamora. All rights reserved.
 *
 * Proprietary code. No modification, distribution or reproduction without
 * written permission.
 */
// Define path to application directory
defined('ROOT_PATH') || define('ROOT_PATH', dirname(dirname(__FILE__)));

// Define path to application directory
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(ROOT_PATH . '/application'));

// Define application environment
defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(ROOT_PATH . '/library'),
    get_include_path(),
)));

error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);

// date_default_timezone_set("Europe/Madrid");

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);

$application->bootstrap()->run();
