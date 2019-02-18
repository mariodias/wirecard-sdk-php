<?php

namespace Wirecard\Formatter;

use Wirecard\Contracts\Renderable;

/**
 * Class Formatter.
 */
abstract class Formatter implements Renderable
{
    /**
     * @var stdClass renderer.
     */
    protected $renderer;

    /**
     * Renderer instance.
     *
     * @param stdClass Renderable $renderer
     */
    public function __construct(Renderable $renderer)
    {
        $this->renderer = $renderer;
    }
}
