<?php

/**
 * Utility functions needed for WHMCS
 *
 * @package CLASSPREFIX
 */

use VENDORPREFIX\WHMCS\CLASSPREFIX\CLASSPREFIXModule;

/**
 * Define addon module configuration parameters.
 *
 * Includes a number of required system fields including name, description,
 * author, language and version.
 *
 * Also allows you to define any configuration parameters that should be
 * presented to the user when activating and configuring the module. These
 * values are then made available in all module function calls.
 *
 * @see https://developers.whmcs.com/addon-modules/configuration/
 *
 * @return array
 */
function MODULENAME_config(): array
{
    return CLASSPREFIXModule::getConfig();
}

/**
 * Define module related meta data.
 *
 * Required by payment gateway modules only.
 * Values returned here are used to determine module related capabilities and
 * settings.
 *
 * @see https://developers.whmcs.com/payment-gateways/meta-data-params/
 *
 * @return array
 */
function MODULENAME_MetaData()
{
    return CLASSPREFIXModule::getMetaData();
}



/**
 * Define Gateway Payment link.
 *
 * Required by third party payment gateway modules only.
 *
 * Defines the HTML output displayed on an invoice. Typically consists of an
 * HTML form that will take the user to the payment gateway endpoint.
 *
 * @param array $params Payment Gateway Module Parameters
 *
 * @see https://developers.whmcs.com/payment-gateways/third-party-gateway/
 *
 * @return string
 */
function MODULENAME_link($params): string
{
    return '';
}
