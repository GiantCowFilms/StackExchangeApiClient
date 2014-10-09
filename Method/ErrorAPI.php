<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace BenatEspina\StackExchangeApiClient\Method;

use BenatEspina\StackExchangeApiClient\Client;
use BenatEspina\StackExchangeApiClient\Model\Error;

/**
 * Class ErrorAPI.
 *
 * @package BenatEspina\StackExchangeApiClient\Method
 */
class ErrorAPI
{
    /**
     * Client instance.
     *
     * @var \BenatEspina\StackExchangeApiClient\Client
     */
    protected $client;

    /**
     * The prefix of errors API requests.
     *
     * @var string
     */
    protected $prefix = '/errors';

    /**
     * Constructor.
     *
     * @param \BenatEspina\StackExchangeApiClient\Client $client that will be used to connect the server
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get descriptions of all the errors that the API could return.
     *
     * More info: https://api.stackexchange.com/docs/errors
     *
     * @param string[] $params QueryString parameter(s), it admits page and pagesize; by default is null
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\AccessTokenInterface>
     */
    public function getAll($params = array())
    {
        return $this->responseToArray($this->client->get($this->prefix, $params));
    }

    /**
     * Transforms the json decodes array to error objects array.
     *
     * @param mixed $response Decoded array containing response
     *
     * @return array<BenatEspina\StackExchangeApiClient\Model\Interfaces\ErrorInterface>
     */
    private function responseToArray($response)
    {
        $errors = array();
        foreach ($response['items'] as $response) {
            $errors[] = new Error($response);
        }

        return $errors;
    }
}
