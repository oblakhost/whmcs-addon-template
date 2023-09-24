<?php

/**
 * Payment gateway module hooks file
 *
 * @package    CLASSPREFIX
 * @subpackage Hooks
 */

use Oblak\WHMCS\Hooks\HookManager;

require_once dirname(__DIR__, 2) . '/modules/gateways/MODULENAME/vendor/autoload.php';

HookManager::getInstance()->registerHooks(
    'MODULENAME',
    // Add your Hookable classnames here
);
