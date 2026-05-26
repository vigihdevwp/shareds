<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts\Bootstrap;

interface NavBarTogglerInterface
{
    public function getContent(): string;
    public function getOptions(): array;
}
