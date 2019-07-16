<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class Multipayments.
 */
class Multipayments
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
     * Resource multipayments API.
     *
     * @const string
     */
    const RESOURCE = 'multipayments';

    /**
     * Resource escrows API.
     *
     * @const string
     */
    const RESOURCE_ESCROW = 'escrows';

    /**
     * Path simulate API.
     *
     * @const string
     */
    const BASE_PATH_SIMULATE = 'https://sandbox.moip.com.br/simulador/authorize?';

    /**
     * http Client.
     *
     * @var stdClass
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
     * Create a new multipayment.
     *
     * @param array  $data
     * @param string $multiorder_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function create($multiorder_id, array $data, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{multiorder_id}/multipayments', [
            'resource'      => 'multiorders',
            'multiorder_id' => $multiorder_id,
        ]);

        $options = array_merge($options, ['body' => json_encode($data)]);

        return $this->client->post($url, $options);
    }

    /**
     * Get details about a multipayment.
     *
     * @param string $multipayment_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function get($multipayment_id, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{multipayment_id}', [
            'resource'        => self::RESOURCE,
            'multipayment_id' => $multipayment_id,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Capture a pre-authorized amount on a credit card payment.
     *
     * @param string $multipayment_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function capture($multipayment_id, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{multipayment_id}/capture', [
            'resource'        => self::RESOURCE,
            'multipayment_id' => $multipayment_id,
        ]);

        return $this->client->post($url, $options);
    }

    /**
     * Cancel a pre-authorized amount on a credit card payment.
     *
     * @param string $multipayment_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function void($multipayment_id, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{multipayment_id}/void', [
            'resource'        => self::RESOURCE,
            'multipayment_id' => $multipayment_id,
        ]);

        return $this->client->post($url, $options);
    }

    /**
     * Release an escrow payment.
     *
     * @param string $escrow_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function release($escrow_id, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{escrow_id}/release', [
            'resource'   => 'escrows',
            'escrow_id'  => $escrow_id,
        ]);

        return $this->client->post($url, $options);
    }
}
