<?php

namespace Recca0120\Repository;

class Method
{
    /**
     * $name.
     *
     * @var string
     */
    public $name;

    /**
     * $parameters.
     *
     * @var mixed
     */
    public $parameters;

    /**
     * @param string $name
     * @param mixed  $parameters
     */
    public function __construct($name, $parameters = null)
    {
        $this->name = $name;
        $this->parameters = $parameters;
    }
}
