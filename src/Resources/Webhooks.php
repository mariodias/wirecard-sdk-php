<?php

namespace Wirecard\Resources;

use GuzzleHttp\Exception\ClientException;
use Wirecard\Contracts\WirecardClient;
use Wirecard\ResourceUtils;

/**
 * Class Webhooks.
 */
class Webhooks
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
     * Resource webhook API.
     *
     * @const string
     */
    const RESOURCE = 'webhooks';

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
     * Resend a notification.
     *
     * @param array $data
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function resendNotification(array $data, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH, [
            'resource' => self::RESOURCE,
        ]);

        $options = array_merge($options, ['body' => json_encode($data)]);

        return $this->client->post($url, $options);
    }

    /**
     * Get notifications about a transaction.
     *
     * @param string $resource_id
     * @param array  $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function get($resource_id, array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH.'?resourceId={resource_id}', [
            'resource'    => self::RESOURCE,
            'resource_id' => $resource_id,
        ]);

        return $this->client->get($url, $options);
    }

    /**
     * Get a notifications list in Wirecard.
     *
     * @param array $options
     *
     * @throws ClientException
     *
     * @return mixed
     */
    public function getNotifications(array $options = ['http_errors' => false])
    {
        $url = $this->interpolate(self::BASE_PATH, [
            'resource' => self::RESOURCE,
        ]);

        return $this->client->get($url, $options);
    }
}
