<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs\Bootstrap;

use VigihdevWP\Shareds\Contracts\Bootstrap\ImageMediaInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class ImageMediaDto implements ImageMediaInterface
{
    public function __construct(
        #[SerializedName("image_url")]
        private readonly string $imageUrl
    ) {}

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}
