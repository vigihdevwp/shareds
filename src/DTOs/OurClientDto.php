<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs;

use VigihdevWP\Shareds\Contracts\OurClientInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class OurClientDto implements OurClientInterface
{

    public function __construct(
        private readonly string $name,
        #[SerializedName('image_url')]
        private readonly string $imageUrl
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}
