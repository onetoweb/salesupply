<?php

namespace Onetoweb\Salesupply\Endpoint;

/**
 * Customer Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class Customer extends AbstractEndpoint
{
    const RESOURCE = 'Customers';
    
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
    
    /**
     * @param array $data = []
     *
     * @return array|null
     */
    public function create(array $data = []): ?array
    {
        return $this->request(parent::METHOD_POST, $this->getUrl(self::getResource()), $data);
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
}