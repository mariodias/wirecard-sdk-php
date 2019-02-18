<?php

namespace Wirecard\Formatter;

/**
 * Class FormatInJson.
 */
class FormatInJson extends Formatter
{
    /**
     * Format data.
     *
     * @return mixed
     */
    public function format()
    {
        return json_decode($this->renderer->format(), false, JSON_FORCE_OBJECT);
    }
}
