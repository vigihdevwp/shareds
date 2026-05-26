<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs;

use VigihdevWP\Shareds\Contracts\ShareItInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class ShareItDto implements ShareItInterface
{

    public function __construct(
        private readonly string $name,
        #[SerializedName('icon_url')]
        private readonly string $iconUrl,
        #[SerializedName('share_url')]
        private readonly string $shareUrl,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    public function getShareUrl(): string
    {
        return $this->shareUrl;
    }
}
