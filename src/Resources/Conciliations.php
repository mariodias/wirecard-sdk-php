<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class Conciliations.
 */
class Conciliations
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
     * Resource conciliation API.
     *
     * @const string
     */
    const RESOURCE = 'reconciliations';

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
     * Get a financial file.
     *
     * @param date  $date    - format: YYYY-MM-DD
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getFinancialFile($date, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/financials?eventsCreatedAt={date}', [
            'resource' => self::RESOURCE,
            'date'     => $date,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get a sales file.
     *
     * @param date  $date    - Format: YYYYMMDD
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getSalesFile($date, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/sales/{date}', [
            'resource' => self::RESOURCE,
            'date'     => $date,
        ]);

        return $this->client->get($url, $options);
    }
}
