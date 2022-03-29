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
     * @param int $shopOwnerId
     * @param array $query = []
     *
     * @return array|null
     */
    public function listOwners(int $shopOwnerId, array $query = []): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('ShopOwners', $shopOwnerId, self::getResource()), $query);
    }
    
    /**
     * @param int $shopOwnerId
     * @param string $search
     *
     * @return array|null
     */
    public function search(int $shopOwnerId, string $search): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('ShopOwners', $shopOwnerId, self::getResource(), 'Search', $search));
    }
    
    /**
     * @param int $shopOwnerId
     * @param string $customerCode
     *
     * @return array|null
     */
    public function getByCustomerCode(int $shopOwnerId, string $customerCode): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('ShopOwners', $shopOwnerId, self::getResource(), 'CustomerCode', $customerCode));
    }
    
    /**
     * @return array|null
     */
    public function list(): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource()));
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
     * @param bool $newsLetter = true
     *
     * @return array|null
     */
    public function receiveNewsletter(int $id, bool $newsLetter = true): ?array
    {
        return $this->request(parent::METHOD_PUT, $this->getUrl(self::getResource(), $id, 'ReceiveNewsLetter', ($newsLetter ? 'true' : 'false')));
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