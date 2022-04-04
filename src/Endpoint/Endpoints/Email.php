<?php

namespace Onetoweb\Salesupply\Endpoint\Endpoints;

use Onetoweb\Salesupply\Endpoint\AbstractEndpoint;

/**
 * Email Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class Email extends AbstractEndpoint
{
    const RESOURCE = 'Emails';
    
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
    public function list(int $shopId): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('Shops', $shopId, self::getResource()));
    }
}