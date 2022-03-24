<?php

namespace Onetoweb\Salesupply\Endpoint;

/**
 * Culture Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class Culture extends AbstractEndpoint
{
    const RESOURCE = 'Cultures';
    
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