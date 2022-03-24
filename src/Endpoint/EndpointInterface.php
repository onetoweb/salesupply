<?php

namespace Onetoweb\Salesupply\Endpoint;

/**
 * Endpoint Interface.
 * 
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
interface EndpointInterface
{
    /**
     * @return string
     */
    public static function getResource(): string;
}