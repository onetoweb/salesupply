<?php

namespace Onetoweb\Salesupply\Endpoint;

/**
 * Shop Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class Shop extends AbstractEndpoint
{
    const RESOURCE = 'Shops';
    
    /**
     * @return string
     */
    public static function getResource(): string
    {
        return self::RESOURCE;
    }
    
    /**
     * @return array|null
     */
    public function list(): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource()));
    }
}