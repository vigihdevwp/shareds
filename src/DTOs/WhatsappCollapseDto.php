<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs;

use VigihdevWP\Shareds\Contracts\WhatsappCollapseInterface;
use VigihdevWP\Shareds\DTOs\WhatsappSendDto;

final class WhatsappCollapseDto implements WhatsappCollapseInterface
{

    /**
     *
     * @param WhatsappSendDto[] $items
     * @param string $description
     * @return void
     */
    public function __construct(
        private readonly array $items,
        private readonly string $title,
        private readonly string $description,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     *
     * @return WhatsappSendDto[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
