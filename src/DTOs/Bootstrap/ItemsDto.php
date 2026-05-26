<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs\Bootstrap;

use VigihdevWP\Shareds\Contracts\Bootstrap\ItemsInterface;

final class ItemsDto implements ItemsInterface
{
    public function __construct(
        private readonly array $items
    ) {}

    public function getItems(): array
    {
        return $this->items;
    }
}
