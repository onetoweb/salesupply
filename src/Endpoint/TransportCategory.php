<?php

namespace Onetoweb\Salesupply\Endpoint;

/**
 * TransportCategory Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class TransportCategory extends AbstractEndpoint
{
    const RESOURCE = 'TransportCategories';
    
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
    
    /**
     * @param int $id
     *
     * @return array|null
     */
    public function get(int $id): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource(), $id));
    }
}