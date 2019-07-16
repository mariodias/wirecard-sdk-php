<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class NotificationPreferences.
 */
class NotificationPreferences
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
     * Resource notification preferences API.
     *
     * @const string
     */
    const RESOURCE = 'preferences/notifications';

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
     * Create a new notification preference.
     *
     * @param array $data
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function create(array $data = null, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH, [
            'resource' => self::RESOURCE,
        ]);

        $options = array_merge($options, [ 'body' => json_encode($data) ]);

        return $this->client->post($url, $options);
    }

    /**
     * Create a new notification preference to an APP.
     *
     * @param array $data
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function createPreferenceToApp($app_id, array $data = null, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{app_id}/notifications', [
            'resource' => 'preferences',
            'app_id'   => $app_id,
        ]);

        $options = array_merge($options, [ 'body' => json_encode($data) ]);

        return $this->client->post($url, $options);
    }

    /**
     * Get a notification preference.
     *
     * @param string $notification_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function get($notification_id, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{notification_id}', [
            'resource'        => self::RESOURCE,
            'notification_id' => $notification_id,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get a notification preferences list in Wirecard.
     *
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getPreferences(array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH, [
            'resource' => self::RESOURCE,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Delete a notification preference.
     *
     * @param string $notification_id
     * @param array  $data
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function delete($notification_id, array $options = [ 'http_errors' => false ])
    {
        $url = $this->interpolate(self::BASE_PATH.'/{notification_id}', [
            'resource'        => self::RESOURCE,
            'notification_id' => $notification_id,
        ]);

        return $this->client->delete($url, $options);
    }
}
