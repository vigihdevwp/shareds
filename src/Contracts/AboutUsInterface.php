<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts;

interface AboutUsInterface
{
    public function getLogoUrl(): string;
    public function getDescription(): string;
}
