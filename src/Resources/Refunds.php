<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class Refunds.
 */
class Refunds
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
     * Resource refund API.
     *
     * @const string
     */
    const RESOURCE = 'refunds';

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
     * Make a full or a partial refund in a credit card by a payment id.
     *
     * @param string $payment_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function refundPayment($payment_id, array $data = null, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{payment_id}/refunds', [
            'resource'   => 'payments',
            'payment_id' => $payment_id,
        ]);

        $options = array_merge($options, [ 'body' => json_encode($data) ]);

        return $this->client->post($url, $options);
    }

    /**
     * Make a full or a partial refund in a credit card by an order id.
     *
     * @param string $order_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function refundOrder($order_id, array $data = null, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{order_id}/refunds', [
            'resource'   => 'orders',
            'order_id'   => $order_id,
        ]);

        $options = array_merge($options, [ 'body' => json_encode($data) ]);

        return $this->client->post($url, $options);
    }

    /**
     * Get details about a refund.
     *
     * @param string $refund_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function get($refund_id, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{refund_id}', [
            'resource'  => self::RESOURCE,
            'refund_id' => $refund_id,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get a refunds list associated with a particular payment in Wirecard.
     *
     * @param string $payment_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function listPaymentRefunds($payment_id, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{payment_id}/refunds', [
            'resource'       => 'payments',
            'payment_id'     => $payment_id,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get a refunds list associated with a particular order in Wirecard.
     *
     * @param string $order_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function listOrderRefunds($order_id, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{order_id}/refunds', [
            'resource'     => 'orders',
            'order_id'     => $order_id,
        ]);

        return $this->client->get($url, $options);
    }
}
