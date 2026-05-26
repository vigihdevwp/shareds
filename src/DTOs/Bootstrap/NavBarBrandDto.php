<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs\Bootstrap;

use VigihdevWP\Shareds\Contracts\Bootstrap\NavBarBrandInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class NavBarBrandDto implements NavBarBrandInterface
{

    public function __construct(
        #[SerializedName("image_url")]
        protected string $imageUrl,
        #[SerializedName("home_url")]
        protected string $homeUrl,
        protected string $name,
        protected array $options = [],
    ) {}

    public function getHomeUrl(): string
    {
        return $this->homeUrl;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
