<?php

namespace Onetoweb\Salesupply;

/**
 * Salesupply Api Client
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class Client
{
    const BASE_URI = 'https://api.salesupply.com';
    const VERSION = 1;
    
    /**
     * @var string
     */
    private $username;
    
    /**
     * @var string
     */
    private $password;
    
    /**
     * @var int
     */
    private $version;
    
    /**
     * @param string $username
     * @param string $password
     * @param int $version = self::VERSION
     */
    public function __construct(string $username, string $password, int $version = self::VERSION)
    {
        // set params
        $this->username = $username;
        $this->password = $password;
        $this->version = $version;
        
        // initialize endpoints
        $this->initializeEndpoints();
    }
    
    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    
    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    
    /**
     * @return string
     */
    public function getBaseUri(): string
    {
        return self::BASE_URI . "/v{$this->version}";
    }
    
    /**
     * @return void
     */
    private function initializeEndpoints(): void
    {
        $this->activity = new Endpoint\Activity($this);
        $this->carrierAccount = new Endpoint\CarrierAccount($this);
        $this->country = new Endpoint\Country($this);
        $this->culture = new Endpoint\Culture($this);
        $this->currency = new Endpoint\Currency($this);
        $this->customer = new Endpoint\Customer($this);
        $this->exchangeRate = new Endpoint\ExchangeRate($this);
        $this->order = new Endpoint\Order($this);
        $this->orderStatus = new Endpoint\OrderStatus($this);
        $this->product = new Endpoint\Product($this);
        $this->shop = new Endpoint\Shop($this);
        $this->shopOwner = new Endpoint\ShopOwner($this);
    }
}