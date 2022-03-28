<?php

namespace Onetoweb\Salesupply\Endpoint;

use Onetoweb\Salesupply\Client;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\RequestOptions;

/**
 * Abstract Endpoint.
 *
 * @author Jonathan van 't Ende <jvantende@onetoweb.nl>
 * 
 * @copyright Onetoweb B.V.
 */
abstract class AbstractEndpoint implements EndpointInterface
{
    /**
     * Methods.
     */
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';
    
    /**
     * @var Client
     */
    protected $client;
    
    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    
    /**
     * @param string[] $parts
     *
     * @return string
     */
    protected function getUrl(string ...$parts): string
    {
        return implode('/', array_merge([$this->client->getBaseUri()], $parts));
    }
    
    /**
     * @param string $method
     * @param string $url
     * @param array $data = []
     * @param array $query = []
     *
     * @return mixed
     */
    public function request(string $method, $url = null, array $data = [], array $query = [])
    {
        // build options
        $options = [
            RequestOptions::QUERY => $query,
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => [
                'Accept' => 'application/json',
                'Cache-Control' => 'no-cache',
                'Connection' => 'close',
                'Authorization' => 'Basic ' . base64_encode($this->client->getUsername() . ':' . $this->client->getPassword()),
            ],
        ];
        
        // add data
        if (count($data) > 0) {
            $options[RequestOptions::JSON] = $data;
        }
        
        // use guzzle client to make request
        $response = (new GuzzleClient())->request($method, $url, $options);
        
        // get contents
        $contents = $response
            ->getBody()
            ->getContents()
        ;
        
        // decode json
        $result = json_decode($contents, true);
        
        return $result;
    }
}