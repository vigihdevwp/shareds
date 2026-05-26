<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts\Bootstrap;

interface TitleDescriptionInterface
{
    public function getTitle(): string;
    public function getDescription(): string;
}
