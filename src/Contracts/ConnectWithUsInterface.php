<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts;

interface ConnectWithUsInterface
{
    public function getName(): string;
    public function getIconUrl(): string;
    public function getActionUrl(): string;
}
