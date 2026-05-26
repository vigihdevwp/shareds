<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts\OwlCarousel;

interface ResponsiveOwlCarouselInterface
{

    /**
     * Add custom breakpoint
     */
    public function addBreakpoint(int $width, OptionsOwlCarouselInterface $options): static;

    /**
     * Extra small devices (portrait phones, less than 576px)
     */
    public function xs(OptionsOwlCarouselInterface $options): static;

    /**
     * Small devices (landscape phones, 576px and up)
     */
    public function sm(OptionsOwlCarouselInterface $options): static;

    /**
     * Medium devices (tablets, 768px and up)
     */
    public function md(OptionsOwlCarouselInterface $options): static;

    /**
     * Large devices (desktops, 992px and up)
     */
    public function lg(OptionsOwlCarouselInterface $options): static;

    /**
     * Extra large devices (large desktops, 1200px and up)
     */
    public function xl(OptionsOwlCarouselInterface $options): static;

    /**
     * Extra extra large devices (larger desktops, 1400px and up)
     */
    public function xxl(OptionsOwlCarouselInterface $options): static;

    /**
     * Get breakpoints as array
     */
    public function toArray(): array;

    /**
     * Get breakpoints as JSON string
     */
    public function toJson(int $options = 0): string;
}
