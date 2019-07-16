<?php

namespace Wirecard;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\Formatter\ResourceUtils as Utils;

/**
 * Class Wirecard.
 */
class Wirecard implements WirecardClient
{
    /*
     * Standardizes the return format.
     */
    use Utils;

    /**
     * Http Client Instance.
     *
     * @param stdClass
     */
    protected $client;

    /**
     * Wirecard authentication AccessToken.
     *
     * @var string
     */
    protected $AccessToken;

    /**
     * Wirecard API environment.
     *
     * @var stdClass
     */
    protected $environment = WirecardClient::SANDBOX;

    /**
     * Wirecard connect API endpoint.
     *
     * @var string
     */
    protected $endPoint = 'https://{environment}.moip.com.br/v2/';

    /**
     * Request options.
     *
     * @var array
     */
    protected $requestOptions = [ ];

    /**
     * Wirecard new instance.
     *
     * @param string $accessToken
     * @param string $environment
     */
    public function __construct($accessToken, $environment = WirecardClient::PRODUCTION)
    {
        $this->setCredential($accessToken);
        $this->setEnvironment($environment);

        $base_uri = str_replace('{environment}', $this->environment, $this->endPoint);
        $this->client = new Client([ 'base_uri' => $base_uri ]);

        $this->requestOptions = [
            'headers' => [
                'Content-Type'  => 'application/json',
                'Authorization' => 'OAuth '.("{$this->accessToken}"),
            ],
        ];
    }

    /**
     * Set the Wirecard API accessToken.
     *
     * @param string $accessToken
     *
     * @return $this
     */
    public function setCredential($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Set the Wirecard environment.
     *
     * @param stdClass $environment
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;

        return $this;
    }

    /**
     * Return a Http client instance.
     *
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

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
    public function get($url = null, $options = [ ])
    {
        $response = $this->client->get($url, $this->getOptions($options));

        return Utils::formatInJson($response);
    }

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
    public function post($url = null, $options = [ ])
    {
        $response = $this->client->post($url, $this->getOptions($options));

        return Utils::formatInJson($response);
    }

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
    public function put($url = null, $options = [ ])
    {
        $response = $this->client->put($url, $this->getOptions($options));

        return Utils::formatInJson($response);
    }

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
    public function delete($url = null, $options = [ ])
    {
        $response = $this->client->delete($url, $this->getOptions($options));
        print_r('Successfully deleted resource');
    }

    /**
     * Get the request options.
     *
     * @param array $options
     *
     * @return array
     */
    public function getOptions($options = [ ])
    {
        return array_merge($this->requestOptions, $options);
    }
}
