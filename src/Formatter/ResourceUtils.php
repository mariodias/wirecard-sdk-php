<?php

namespace Wirecard\Formatter;

use Psr\Http\Message\ResponseInterface;

/**
 * Trait ResourceUtils.
 */
trait ResourceUtils
{
    /**
     * Convert json to object.
     *
     * @param ResponseInterface $response
     *
     * @return mixed
     */
    public static function formatInJson(ResponseInterface $response)
    {
        $webservice = new Webservice($response->getBody()->getContents());
        $renderTo = new FormatInJson($webservice);

        return $renderTo->format();
    }
}
