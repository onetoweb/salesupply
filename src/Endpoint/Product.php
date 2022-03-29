<?php

namespace Onetoweb\Salesupply\Endpoint;

/**
 * Product Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class Product extends AbstractEndpoint
{
    const RESOURCE = 'Products';
    
    /**
     * @return string
     */
    public static function getResource(): string
    {
        return self::RESOURCE;
    }
    
    /**
     * @param int $shopGroupId
     * @param array $query = []
     * 
     * @return array|null
     */
    public function list(int $shopGroupId, array $query = []): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('ShopGroup', $shopGroupId, self::getResource()), [], $query);
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
     * @param int $id
     *
     * @return array|null
     */
    public function stockPerLocation(int $id): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource(), $id, 'StockPerLocation'));
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
     * @param array int $id
     *
     * @return array|null
     */
    public function delete(int $id): ?array
    {
        return $this->request(parent::METHOD_DELETE, $this->getUrl(self::getResource(), $id));
    }
}