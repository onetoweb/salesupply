<?php

namespace Onetoweb\Salesupply;

use Onetoweb\Salesupply\Endpoint\EndpointInterface;

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
     * @param string $key
     * @param EndpointInterface $endpoint
     * 
     * @return void
     */
    public function addEndpoint(string $key, string $endpoint): void
    {
        $this->{$key} = new $endpoint($this);
    }
    
    /**
     * @return void
     */
    private function initializeEndpoints(): void
    {
        $directory = __DIR__ . '/Endpoint/Endpoints/';
        foreach (array_diff(scandir($directory), array('..', '.')) as $filename) {
            
            if (is_file($directory . $filename)) {
                
                $endpoint = pathinfo($filename, PATHINFO_FILENAME);
                $class = "\\Onetoweb\\Salesupply\\Endpoint\\Endpoints\\$endpoint";
                
                if (class_exists($class) and in_array(EndpointInterface::class, class_implements($class))) {
                    
                    $this->addEndpoint(lcfirst($endpoint), $class);
                }
            }
        }
    }
}