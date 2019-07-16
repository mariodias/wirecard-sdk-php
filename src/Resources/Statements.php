<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class Statements.
 */
class Statements
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
     * Resource statements API.
     *
     * @const string
     */
    const RESOURCE = 'statements';

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
     * Get statements details.
     *
     * @param int   $type
     * @param date  $date    - Format: YYYY-MM-DD
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getStatementDetails($type, $date, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/details?type={type}&date={date}', [
            'resource' => self::RESOURCE,
            'type'     => $type,
            'date'     => $date,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get a statements list in Wirecard.
     *
     * @param string $begin
     * @param string $end
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getStatementList($begin, $end, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'?begin={begin}&end={end}', [
            'resource' => self::RESOURCE,
            'begin'    => $begin,
            'end'      => $end,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get future statements details.
     *
     * @param int   $type
     * @param date  $date
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getFutureStatementDetails($type, $date, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/details?type={type}&date={date}', [
            'resource' => 'futurestatements',
            'type'     => $type,
            'date'     => $date,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get a statements list in Wirecard.
     *
     * @param string $begin
     * @param string $end
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getFutureStatementList($begin, $end, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'?begin={begin}&end={end}', [
            'resource' => 'futurestatements',
            'begin'    => $begin,
            'end'      => $end,
        ]);

        return $this->client->get($url, $options);
    }
}
