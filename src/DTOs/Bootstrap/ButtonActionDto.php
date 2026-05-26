<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs\Bootstrap;

use VigihdevWP\Shareds\Contracts\Bootstrap\ButtonActionInterface;

final class ButtonActionDto implements ButtonActionInterface
{
    public function __construct(
        private readonly string $url,
        private readonly string $label,
        private readonly array $options = []
    ) {}

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getLabel(): string
    {
        return $this->label;
    }
}
