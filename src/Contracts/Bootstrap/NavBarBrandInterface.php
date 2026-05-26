<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts\Bootstrap;

interface NavBarBrandInterface
{
    public function getImageUrl(): string;
    public function getHomeUrl(): string;
    public function getName(): string;
    public function getOptions(): array;
}
