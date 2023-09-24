<?php

/**
 * Gateway callback file
 *
 * @package CLASSPREFIX
 */

use VENDORPREFIX\WHMCS\CLASSPREFIX\CLASSPREFIXGateway;

$gwayDir = dirname($_SERVER['SCRIPT_FILENAME'], 2);
$rootDir = dirname($gwayDir, 2);

// Require libraries needed for gateway module functions.
require_once $rootDir . '/init.php';
require_once $rootDir . '/includes/gatewayfunctions.php';
require_once $rootDir . '/includes/invoicefunctions.php';
require_once $gwayDir . '/nestpay/vendor/autoload.php';

CLASSPREFIXGateway::getInstance()->checkResponse();
