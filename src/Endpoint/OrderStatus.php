<?php

namespace Onetoweb\Salesupply\Endpoint;

/**
 * OrderStatus Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class OrderStatus extends AbstractEndpoint
{
    const RESOURCE = 'OrderStatuses';
    
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
    public function base(): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('Base'.self::getResource()));
    }
    
    /**
     * @return array|null
     */
    public function types(): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('OrderStatusTypes'));
    }
    
    /**
     * @param int $shopId
     *
     * @return array|null
     */
    public function listShop(int $shopId): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('Shops', $shopId, self::getResource()));
    }
    
    /**
     * @param int $shopOwnerId
     *
     * @return array|null
     */
    public function listOwner(int $shopOwnerId): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('ShopOwners', $shopOwnerId, self::getResource()));
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