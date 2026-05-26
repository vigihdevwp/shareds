<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts;

interface OurClientInterface
{
    public function getName(): string;

    public function getImageUrl(): string;
}
