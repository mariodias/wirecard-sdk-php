<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class Payments.
 */
class Payments
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
     * Resource payments API.
     *
     * @const string
     */
    const RESOURCE = 'payments';

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
     * Create a new payment.
     *
     * @param array  $data
     * @param string $order_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function create($order_id, array $data, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{order_id}/payments', [
            'resource' => 'orders',
            'order_id' => $order_id,
        ]);

        $options = array_merge($options, ['body' => json_encode($data)]);

        return $this->client->post($url, $options);
    }

    /**
     * Get details about a payment.
     *
     * @param string $payment_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function get($payment_id, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{payment_id}', [
            'resource'   => self::RESOURCE,
            'payment_id' => $payment_id,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Capture a pre-authorized amount on a credit card payment.
     *
     * @param string $payment_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function capture($payment_id, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{payment_id}/capture', [
            'resource'   => self::RESOURCE,
            'payment_id' => $payment_id,
        ]);

        return $this->client->post($url, $options);
    }

    /**
     * Cancel a pre-authorized amount on a credit card payment.
     *
     * @param string $payment_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function void($payment_id, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{payment_id}/void', [
            'resource'   => self::RESOURCE,
            'payment_id' => $payment_id,
        ]);

        return $this->client->post($url, $options);
    }

    /**
     * Authorizes a payment. (Available only in sandbox to credit card payment with status IN_ANALYSIS and
     * billet payment with status WAITING).
     *
     * @param string $payment_id
     * @param int    $value
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function simulate($payment_id, $value, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH_SIMULATE.'payment_id={payment_id}&amount={value}', [
            'payment_id' => $payment_id,
            'value'      => $value,
        ]);

        return $this->client->get($url, $options);
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
