<?php

namespace Onetoweb\Salesupply\Endpoint;

/**
 * System Endpoint.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
class System extends AbstractEndpoint
{
    const RESOURCE = 'System';
    
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
    public function me(): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('Me'));
    }
    
    /**
     * @return array|null
     */
    public function meShops(): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl('Me', 'Shops'));
    }
    
    /**
     * @return array|null
     */
    public function appModules(): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource(), 'AppModules'));
    }
    
    /**
     * @param string $feature
     * 
     * @return array|null
     */
    public function appModuleFeature(string $feature): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource(), 'AppModules', 'Feature', $feature));
    }
    
    /**
     * @return array|null
     */
    public function appModuleFeatures(): ?array
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource(), 'AppModuleFeatures'));
    }
    
    /**
     * @return string|null
     */
    public function version(): ?string
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource(), 'Version'));
    }
    
    /**
     * @return string|null
     */
    public function time(): ?string
    {
        return $this->request(parent::METHOD_GET, $this->getUrl(self::getResource(), 'Time'));
    }
}