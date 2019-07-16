<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class Anticipations.
 */
class Anticipations
{
    /*
     * Standardizes the return format.
     */
    use ResourceUtils;

    /**
     * Base Path API.
     *
     * @const string
     */
    const BASE_PATH = '{resource}';

    /**
     * Resource anticipation API.
     *
     * @const string
     */
    const RESOURCE = 'anticipations';

    /**
     * http Client.
     *
     * @param stdClass WirecardClient $client
     */
    protected $client;

    /**
     * Initialize a new instance.
     *
     * @param stdClass WirecardClient $client
     */
    public function __construct(WirecardClient $client)
    {
        $this->client = $client;
    }

    /**
     * Estimates an anticipation.
     *
     * @param int   $amount
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function estimates($amount, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'?amount={amount}', [
            'resource' => 'anticipationestimates',
            'amount'   => $amount,
        ]);

        return $this->client->post($url, $options);
    }

    /**
     * Create a anticipation of receivables to a seller.
     *
     * @param int   $amount
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function create($amount, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'?amount={amount}', [
            'resource' => self::RESOURCE,
            'amount'   => $amount,
        ]);

        return $this->client->post($url, $options);
    }

    /**
     * Get details about an anticipation.
     *
     * @param string $anticipation_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function get($anticipation_id, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{anticipation_id}', [
            'resource'        => self::RESOURCE,
            'anticipation_id' => $anticipation_id,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get an anticipation list in Wirecard.
     *
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getAnticipations(array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH, [
             'resource' => self::RESOURCE,
         ]);

        return $this->client->get($url, $options);
    }
}
