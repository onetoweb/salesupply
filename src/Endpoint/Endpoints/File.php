<?php

namespace Onetoweb\Salesupply\Endpoint\Endpoints;

use Onetoweb\Salesupply\Endpoint\AbstractEndpoint;

/**
 * File Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class File extends AbstractEndpoint
{
    const RESOURCE = 'Files';
    
    /**
     * @return string
     */
    public static function getResource(): string
    {
        return self::RESOURCE;
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
    public function metaData(int $id): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource(), $id, 'MetaData'));
    }
    
    /**
     * @param int $id
     *
     * @return array|null
     */
    public function stream(int $id): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource(), $id, 'Stream'));
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
}