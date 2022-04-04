<?php

namespace Onetoweb\Salesupply\Endpoint\Endpoints;

use Onetoweb\Salesupply\Endpoint\AbstractEndpoint;

/**
 * Activity Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class CarrierAccount extends AbstractEndpoint
{
    const RESOURCE = 'CarrierAccounts';
    
    /**
     * @return string
     */
    public static function getResource(): string
    {
        return self::RESOURCE;
    }
    
    /**
     * @param int $shopOwnerId
     *
     * @return array|null
     */
    public function listAll(int $shopOwnerId): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('ShopOwners', $shopOwnerId, self::getResource()));
    }
    
    
    /**
     * @param int $shopId
     *
     * @return array|null
     */
    public function listShop(int $shopId): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('Shop', $shopId, self::getResource()));
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
    
    /**
     * @param array $data
     * 
     * @return array|null
     */
    public function create(array $data): ?array
    {
        return $this->request(parent::METHOD_POST, $this->getUrl(self::getResource()), $data);
    }
    
    /**
     * @param array $data
     * 
     * @return array|null
     */
    public function update(array $data): ?array
    {
        return $this->request(parent::METHOD_PUT, $this->getUrl(self::getResource()), $data);
    }
    
    /**
     * @param int $id
     * 
     * @return array|null
     */
    public function delete(int $id): ?array
    {
        return $this->request(parent::METHOD_DELETE, $this->getUrl(self::getResource(), $id));
    }
}