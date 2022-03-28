<?php

namespace Onetoweb\Salesupply\Endpoint;

/**
 * VatTariff Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class VatTariff extends AbstractEndpoint
{
    const RESOURCE = 'VATTariffs';
    
    /**
     * @return string
     */
    public static function getResource(): string
    {
        return self::RESOURCE;
    }
    
    /**
     * @param int $shopId
     * 
     * @return array|null
     */
    public function list(int $shopId): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('Shops', $shopId, self::getResource()));
    }
}