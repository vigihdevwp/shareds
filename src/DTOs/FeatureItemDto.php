<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs;

use VigihdevWP\Shareds\Contracts\FeatureItemInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class FeatureItemDto implements FeatureItemInterface
{
    public function __construct(
        private readonly string $title,
        #[SerializedName('icon_url')]
        private readonly string $iconUrl,
        private readonly string $description
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
