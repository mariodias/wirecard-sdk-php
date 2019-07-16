<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class Transfers.
 */
class Transfers
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
     * Resource customers API.
     *
     * @const string
     */
    const RESOURCE = 'transfers';

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
     * Create a transfer.
     *
     * @param array $data
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function create(array $data, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH, [
            'resource' => self::RESOURCE,
        ]);

        $options = array_merge($options, [ 'body' => json_encode($data) ]);

        return $this->client->post($url, $options);
    }

    /**
     * Revert a transfer.
     *
     * @param string $transfer_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function revert($transfer_id, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{transfer_id}', [
            'resource'    => self::RESOURCE,
            'transfer_id' => $transfer_id,
        ]);

        return $this->client->post($url, $options);
    }

    /**
     * Get details about a transfer in Wirecard.
     *
     * @param string $transfer_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function get($transfer_id, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{transfer_id}', [
            'resource'    => self::RESOURCE,
            'transfer_id' => $transfer_id,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get a transfer list in Wirecard.
     *
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getTransfers(array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH, [
            'resource' => self::RESOURCE,
        ]);

        return $this->client->get($url, $options);
    }
}
