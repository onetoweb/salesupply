<?php

namespace Onetoweb\Salesupply\Endpoint;

/**
 * Order Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class Order extends AbstractEndpoint
{
    const RESOURCE = 'Orders';
    
    /**
     * @return string
     */
    public static function getResource(): string
    {
        return self::RESOURCE;
    }
    
    /**
     * @param int $shopId
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(int $shopId, array $query = []): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl("Shops/$shopId", self::getResource()), [], $query);
    }
    
    /**
     * @param int $shopId
     * @param array $query = []
     *
     * @return array|null
     */
    public function create(int $shopId, array $data = []): ?array
    {
        return $this->request(parent::METHOD_POST, $this->getUrl("Shops/$shopId", self::getResource()), $data);
    }
}