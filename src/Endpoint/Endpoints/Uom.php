<?php

namespace Onetoweb\Salesupply\Endpoint\Endpoints;

use Onetoweb\Salesupply\Endpoint\AbstractEndpoint;

/**
 * Uom Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class Uom extends AbstractEndpoint
{
    const RESOURCE = 'Uoms';
    
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
}