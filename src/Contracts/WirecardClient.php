<?php

namespace Wirecard\Contracts;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

/**
 * Class WirecardClient.
 */
interface WirecardClient
{
    /**
     * Production api environment.
     *
     * @const string
     */
    const PRODUCTION = 'api';

    /**
     * Test api environment.
     *
     * @const string
     */
    const SANDBOX = 'sandbox';

    /**
     * Production connect environment.
     *
     * @const string
     */
    const CONNECT_PRODUCTION = 'connect';

    /**
     * Test connect environment.
     *
     * @const string
     */
    const CONNECT_SANDBOX = 'connect-sandbox';

    /**
     * Return a Http client instance.
     *
     * @return Client
     */
    public function getClient();

    /**
     * Executes a GET request.
     *
     * @param null  $url
     * @param array $options
     *
     * @throws ClientException
     *
     * @return string
     */
    public function get($url = null, $options = []);

    /**
     * Executes a POST request.
     *
     * @param null  $url
     * @param array $options
     *
     * @throws ClientException
     *
     * @return string
     */
    public function post($url = null, $options = []);

    /**
     * Executes a PUT request.
     *
     * @param null  $url
     * @param array $options
     *
     * @throws ClientException
     *
     * @return string
     */
    public function put($url = null, $options = []);

    /**
     * Executes a DELETE request.
     *
     * @param null  $url
     * @param array $options
     *
     * @throws ClientException
     *
     * @return string
     */
    public function delete($url = null, $options = []);
}
