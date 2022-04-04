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
class Activity extends AbstractEndpoint
{
    const RESOURCE = 'Activities';
    
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
    public function categories(): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource(), 'categories'));
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
     * @param array $data
     * 
     * @return array|null
     */
    public function create(array $data): ?array
    {
        return $this->request(parent::METHOD_POST, $this->getUrl(self::getResource()), $data);
    }
    
    /**
     * @param int $id
     * @param array $data
     * 
     * @return array|null
     */
    public function update(int $id, array $data): ?array
    {
        return $this->request(parent::METHOD_PUT, $this->getUrl(self::getResource(), $id), $data);
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