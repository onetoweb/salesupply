<?php

namespace Onetoweb\Salesupply\Endpoint\Endpoints;

use Onetoweb\Salesupply\Endpoint\AbstractEndpoint;

/**
 * Shipment Endpoint.
 *
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 *
 * @copyright Onetoweb B.V.
 */
class Shipment extends AbstractEndpoint
{
    const RESOURCE = 'Shipments';
    
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
    public function listShop(int $shopId, array $query = []): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('Shops', $shopId, self::getResource()), [], $query);
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