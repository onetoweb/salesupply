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
     * @param int $id
     *
     * @return array|null
     */
    public function get(int $id): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource(), $id));
    }
    
    /**
     * @param int $shopId
     * @param array $data = []
     *
     * @return array|null
     */
    public function create(int $shopId, array $data = []): ?array
    {
        return $this->request(parent::METHOD_POST, $this->getUrl("Shops/$shopId", self::getResource()), $data);
    }
    
    /**
     * @param array $data = []
     *
     * @return array|null
     */
    public function update(array $data = []): ?array
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
    
    /**
     * @param int $id
     *
     * @return array|null
     */
    public function rows(int $id): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource(), $id, 'Rows'));
    }
    
    /**
     * @param int $orderId
     * @param array $data = []
     *
     * @return array|null
     */
    public function addRow(int $orderId, array $data = []): ?array
    {
        return $this->request(parent::METHOD_POST, $this->getUrl(self::getResource(), $orderId, 'Rows'), $data);
    }
    
    /**
     * @param int $orderId
     * @param array $data = []
     *
     * @return array|null
     */
    public function updateRow(int $orderId, array $data = []): ?array
    {
        return $this->request(parent::METHOD_PUT, $this->getUrl(self::getResource(), $orderId, 'Rows'), $data);
    }
}