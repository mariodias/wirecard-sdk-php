<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class Orders.
 */
class Orders
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
     * Resource orders API.
     *
     * @const string
     */
    const RESOURCE = 'orders';

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
     * Create a new order.
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
     * Create a new order.
     *
     * @param array $data
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->create()->id;
    }

    /**
     * Get details about an order.
     *
     * @param string $order_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function get($order_id, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{order_id}', [
            'resource' => self::RESOURCE,
            'order_id' => $order_id,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get an order list in Wirecard.
     *
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getOrders(array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH, [
            'resource' => self::RESOURCE,
        ]);

        return $this->client->get($url, $options);
    }
}
