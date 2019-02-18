<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class BankAccounts.
 *
 * @package Wirecard\Resources
 */
class BankAccounts
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
     * Resource bank account API.
     *
     * @const string
     */
    const RESOURCE = "bankaccounts";

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
     * Create a bank account to a seller.
     *
     * @param array $data
     * @param array $options
     * @throws ClientException
     * @return mixed
     */
    public function create($account_id, array $data, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH."/{account_id}/bankaccounts", [
            'resource' => 'accounts',
            "account_id" => $account_id
        ]);

        $options = array_merge($options,['body' => json_encode($data)]);

        return $this->client->post($url, $options);
    }

    /**
     * Get details about a bank account.
     *
     * @param string $bank_account_id
     * @param array $options
     * @throws ClientException
     * @return mixed
     */
    public function get($bank_account_id, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH."/{bank_account_id}", [
            'resource'    => self::RESOURCE,
            'bank_account_id' => $bank_account_id
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get a bank account list in Wirecard.
     *
     * @param array $options
     * @throws ClientException
     * @return mixed
     */
     public function getBankAccounts($account_id, array $options = ['http_errors' => false])
     {
         $url = $this->interpolate(self::BASE_PATH."/{account_id}/bankaccounts", [
             'resource' => 'accounts',
             "account_id" => $account_id
         ]);

         return $this->client->get($url, $options);
     }

     /**
      * Delete a bank account.
      *
      * @param string $bank_account_id
      * @param array $options
      * @throws ClientException
      * @return mixed
      */
     public function delete($bank_account_id, array $options = ['http_errors' => false])
     {
         $url = $this->interpolate(self::BASE_PATH."/{bank_account_id}", [
             'resource'    => self::RESOURCE,
             'bank_account_id' => $bank_account_id
         ]);

         return $this->client->delete($url, $options);
     }

     /**
      * Update a bank account.
      *
      * @param string $bank_account_id
      * @param array $data
      * @param array $options
      * @throws ClientException
      * @return mixed
      */
     public function update($bank_account_id, array $data, array $options = ['http_errors' => false])
     {
         $url = $this->interpolate(self::BASE_PATH."/{bank_account_id}", [
             'resource'    => self::RESOURCE,
             'bank_account_id' => $bank_account_id
         ]);

         $options = array_merge($options,['body' => json_encode($data)]);

         return $this->client->put($url, $options);
     }
}
