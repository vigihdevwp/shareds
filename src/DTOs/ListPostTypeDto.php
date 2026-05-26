<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs;

use VigihdevWP\Shareds\Contracts\ListPostTypeInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class ListPostTypeDto implements ListPostTypeInterface
{

    public function __construct(
        private readonly string $title,
        #[SerializedName('image_url')]
        private readonly string $imageUrl,
        #[SerializedName('action_url')]
        private readonly string $actionUrl,
        private readonly string $snippet

    ) {}

    /**
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     *
     * @return string URL gambar artikel
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getActionUrl(): string
    {
        return $this->actionUrl;
    }

    /**
     * @return string Cuplikan konten artikel
     */
    public function getSnippet(): string
    {
        return $this->snippet;
    }
}
