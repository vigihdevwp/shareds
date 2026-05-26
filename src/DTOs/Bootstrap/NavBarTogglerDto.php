<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs\Bootstrap;

use VigihdevWP\Shareds\Contracts\Bootstrap\NavBarTogglerInterface;

final class NavBarTogglerDto implements NavBarTogglerInterface
{

    public function __construct(
        protected string $content,
        protected array $options = [],
    ) {}

    public function getContent(): string
    {
        return $this->content;
    }
    public function getOptions(): array
    {
        return $this->options;
    }
}
