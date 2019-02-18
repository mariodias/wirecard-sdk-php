<?php

namespace Wirecard\Formatter;

use Wirecard\Contracts\Renderable;

/**
 * Class Webservice.
 */
class Webservice implements Renderable
{
    /**
     * @var string.
     */
    protected $data;

    /**
     * Webservice new instance.
     *
     * @param string $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Format data.
     *
     * @return mixed
     */
    public function format()
    {
        return $this->data;
    }
}
