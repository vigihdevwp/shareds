<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs;

use VigihdevWP\Shareds\Contracts\AboutUsInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class AboutUsDto implements AboutUsInterface
{
    public function __construct(
        #[SerializedName('logo_url')]
        private readonly string $logoUrl,
        private readonly string $description,
    ) {}

    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
