<?php

/**
 * CLASSPREFIXGateway class file
 *
 * @package CLASSPREFIX
 */

namespace VENDORPREFIX\WHMCS\CLASSPREFIX;

use Oblak\WHMCS\Module\BaseGateway;

class CLASSPREFIXGateway extends BaseGateway
{
    /**
     * {@inheritDoc}
     */
    protected string $moduleName = 'MODULENAME';

    /**
     * {@inheritDoc}
     */
    public static function getConfig(): array
    {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    public static function getMetaData(): array
    {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    protected function getTransactionId(array $log): string
    {
        throw new \Exception('Implement getTransactionId() method.');
    }

    /**
     * {@inheritDoc}
     */
    protected function getInvoiceId(array $data): int
    {
        throw new \Exception('Implement getInvoiceId() method.');
    }

    /**
     * {@inheritDoc}
     */
    protected function gatewayCallback(array $data, int $invoiceId): void
    {
        throw new \Exception('Implement gatewayCallback() method.');
    }
}
