<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs;

use VigihdevWP\Shareds\Contracts\RelatedPostsInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class RelatedPostsDto implements RelatedPostsInterface
{

    public function __construct(
        private readonly string $title,
        #[SerializedName('image_url')]
        private readonly string $imageUrl,
        #[SerializedName('action_url')]
        private readonly string $actionUrl,
        private readonly string $snippet,
        private readonly string $author,
        #[SerializedName('published_date')]
        private readonly string $publishedDate,
        private readonly string $kategori
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

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPublishedDate(): string
    {
        return $this->publishedDate;
    }

    public function getKategori(): string
    {
        return $this->kategori;
    }

    public function getSnippet(): string
    {
        return $this->snippet;
    }
}
