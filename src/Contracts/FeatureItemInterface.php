<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts;

interface FeatureItemInterface
{
    public function getTitle(): string;
    public function getIconUrl(): string;
    public function getDescription(): string;
}
