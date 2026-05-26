<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts;

interface BreadcrumbInterface
{
    public function getLabel(): string;
    public function getTitle(): string;
    public function getUrl(): ?string;
}
