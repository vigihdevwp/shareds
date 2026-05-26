<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs;

use VigihdevWP\Shareds\Contracts\PostCardInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class PostCardDto implements PostCardInterface
{
    public function __construct(
        private readonly string $title,
        #[SerializedName('image_url')]
        private readonly string $imageUrl,
        #[SerializedName('action_url')]
        private readonly string $actionUrl,
        private readonly string $snippet
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getActionUrl(): string
    {
        return $this->actionUrl;
    }

    public function getSnippet(): string
    {
        return $this->snippet;
    }
}
