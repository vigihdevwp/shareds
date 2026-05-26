<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts\OwlCarousel;

interface ImageSliderOwlCarouselInterface
{

    /**
     *
     * @return string
     */
    public function getName(): string;

    public function getImageUrl(): string;
}
