<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class Customers.
 *
 * @package Wirecard\Resources
 */
class Customers
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
    const RESOURCE = "customers";

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
     * Create a new customer.
     *
     * @param array $data
     * @param array $options
     * @throws ClientException
     * @return mixed
     */
    public function create(array $data, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH, [
            'resource' => self::RESOURCE
        ]);

        $options = array_merge($options,['body' => json_encode($data)]);

        return $this->client->post($url, $options);
    }

    /**
     * Get details about a customer.
     *
     * @param string $customer_id
     * @param array $options
     * @throws ClientException
     * @return mixed
     */
    public function get($customer_id, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH."/{customer_id}", [
            'resource'    => self::RESOURCE,
            'customer_id' => $customer_id
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get a customer list in Wirecard.
     *
     * @param array $options
     * @throws ClientException
     * @return mixed
     */
    public function getCustomers(array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH, [
            'resource' => self::RESOURCE,
        ]);

        return $this->client->get($url, $options);
    }


     /**
     * Add a credit card to a customer.
     *
     * @param string $customer_id
     * @param array $data
     * @param array $options
     * @throws ClientException
     * @return mixed
     */
    public function addCreditCard($customer_id, array $data, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH."/{customer_id}/fundinginstruments", [
            'resource'    => self::RESOURCE,
            'customer_id' => $customer_id
        ]);

        $options = array_merge($options,['body' => json_encode($data)]);

        return $this->client->post($url, $options);
    }

    /**
     * Delete a credit card from a customer.
     *
     * @param string $creditcard_id
     * @param array $data
     * @param array $options
     * @throws ClientException
     * @return mixed
     */
    public function deleteCreditCard($creditcard_id, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH."/{creditcard_id}", [
            'resource'      => 'fundinginstruments',
            'creditcard_id' => $creditcard_id
        ]);

        return $this->client->delete($url, $options);
    }
}
