<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts;

interface WidgetTitleInterface
{
    public function getTitle(): string;
    public function getName(): string;
}
