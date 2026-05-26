<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts\Able;

interface JsonableInterface
{
    public function toJson(): string;
}
