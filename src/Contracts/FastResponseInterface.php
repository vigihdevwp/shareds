<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts;

interface FastResponseInterface
{
    public function getFastValue(): string;
    public function getFastType(): string;
    public function getIconUrl(): string;
    public function getActionUrl(): string;
}
