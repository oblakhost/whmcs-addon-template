<?php

/**
 * Hook loader
 *
 * @package CLASSPREFIX
 */

use Oblak\WHMCS\Hooks\HookManager;

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

require_once __DIR__ . '/vendor/autoload.php';

HookManager::getInstance()->registerHooks(
    'MODULENAME'
    // List your hook classnames here. They need to extend the Hookable class
);
