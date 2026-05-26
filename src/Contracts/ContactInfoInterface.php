<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts;

interface ContactInfoInterface
{
    public function getContactValue(): string;
    public function getIconUrl(): string;
    public function getActionUrl(): string;
    public function getContactType(): string;
}
