<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class Entries.
 *
 * @package Wirecard\Resources
 */
class Entries
{
    /**
     * Standardizes the return format.
     */
    use ResourceUtils;

    /**
     * Base Path API.
     *
     * @const string
     */
    const BASE_PATH = "{resource}";

    /**
     * Resource customers API.
     *
     * @const string
     */
    const RESOURCE = "entries";

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
     * Get details about an entrie.
     *
     * @param string $entrie_id
     * @param array $options
     * @throws ClientException
     * @return mixed
     */
    public function get($entrie_id, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH."/{entrie_id}", [
            'resource'    => self::RESOURCE,
            'entrie_id' => $entrie_id
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get an entries list in Wirecard.
     *
     * @param array $options
     * @throws ClientException
     * @return mixed
     */
    public function getEntries(array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH, [
            'resource' => self::RESOURCE,
        ]);

        return $this->client->get($url, $options);
    }
}
