<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class Accounts.
 */
class Accounts
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
     * Resource accounts API.
     *
     * @const string
     */
    const RESOURCE = 'accounts';

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
     * Create a new account.
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
     * Get details about an account.
     *
     * @param string $account_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function get($account_id, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{account_id}', [
            'resource'    => self::RESOURCE,
            'account_id'  => $account_id,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Check if user already has Wirecard Account.
     * The search can be done by email, CPF or CNPJ.
     *
     * @param string $email
     * @param string $tax_document
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return int
     */
    public function checkExistence($email, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/exists?email={email}', [
            'resource' => self::RESOURCE,
            'email'    => $email,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get Public Key from a Wirecard Account.
     *
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getPublicKey(array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH, [
           'resource' => 'keys',
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get balances about an account.
     *
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getBalances(array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH, [
            'resource' => 'balances',
        ]);

        return $this->client->get($url, $options);
    }
}
