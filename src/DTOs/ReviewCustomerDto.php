<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs;

use VigihdevWP\Shareds\Contracts\ReviewCustomerInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class ReviewCustomerDto implements ReviewCustomerInterface
{

    public function __construct(
        private string $username,
        private float|int $rating,
        #[SerializedName('image_url')]
        private string $imageUrl,
        #[SerializedName('review_text')]
        private string $reviewText

    ) {}

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return float|int
     */
    public function getRating(): float|int
    {
        return $this->rating;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return string
     */
    public function getReviewText(): string
    {
        return $this->reviewText;
    }
}
