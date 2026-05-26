<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs\Bootstrap;

use VigihdevWP\Shareds\Contracts\Bootstrap\{ButtonActionInterface, ContentColumnCompactInterface};

final class ContentColumnCompactDto implements ContentColumnCompactInterface
{

    public function __construct(
        private readonly string $title,
        private readonly string $description,
        private readonly ButtonActionDto $button
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getButton(): ButtonActionInterface
    {
        return $this->button;
    }
}
