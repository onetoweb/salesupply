<?php

namespace Onetoweb\Salesupply\Endpoint\Endpoints;

use Onetoweb\Salesupply\Endpoint\AbstractEndpoint;

/**
 * ShopOwner Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class ShopOwner extends AbstractEndpoint
{
    const RESOURCE = 'ShopOwners';
    
    /**
     * @return string
     */
    public static function getResource(): string
    {
        return self::RESOURCE;
    }
    
    /**
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(array $query = []): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource()), [], $query);
    }
}