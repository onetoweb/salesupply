<?php

namespace Onetoweb\Salesupply\Endpoint\Endpoints;

use Onetoweb\Salesupply\Endpoint\AbstractEndpoint;

/**
 * Ticket Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class Ticket extends AbstractEndpoint
{
    const RESOURCE = 'Tickets';
    
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
        return $this->request(parent::METHOD_GET, $this->getUrl('Shops', $shopId, self::getResource()), [], $query);
    }
    
    /**
     * @param int $shopId
     *
     * @return array|null
     */
    public function statuses(int $shopId): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('Shops', $shopId, 'TicketStatuses'));
    }
    
    /**
     * @param int $shopId
     *
     * @return array|null
     */
    public function types(int $shopId): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('Shops', $shopId, 'TicketTypes'));
    }
}