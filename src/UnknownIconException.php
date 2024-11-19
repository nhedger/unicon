<?php

declare(strict_types=1);

namespace Hedger\Unicon;

use Exception;

class UnknownIconException extends Exception
{
    public function __construct(string $name)
    {
        parent::__construct("Unknown icon: {$name}");
    }
}