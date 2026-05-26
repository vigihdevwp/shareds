<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts;

interface ReviewCustomerInterface
{
    public function getUsername(): string;

    public function getRating(): float|int;

    public function getImageUrl(): string;

    public function getReviewText(): string;
}
