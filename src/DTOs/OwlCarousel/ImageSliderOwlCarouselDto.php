<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs\OwlCarousel;

use VigihdevWP\Shareds\Contracts\OwlCarousel\ImageSliderOwlCarouselInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class ImageSliderOwlCarouselDto implements ImageSliderOwlCarouselInterface
{
    public function __construct(
        private readonly string $name,
        #[SerializedName("image_url")]
        private readonly string $imageUrl,
    ) {}

    /**
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}
