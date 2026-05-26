<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs;

use VigihdevWP\Shareds\Contracts\FastResponseInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class FastResponseDto implements FastResponseInterface
{
    public function __construct(
        #[SerializedName('fast_value')]
        private readonly string $fastValue,
        #[SerializedName('fast_type')]
        private readonly string $fastType,
        #[SerializedName('icon_url')]
        private readonly string $iconUrl,
        #[SerializedName('action_url')]
        private readonly string $actionUrl,
    ) {}

    public function getFastValue(): string
    {
        return $this->fastValue;
    }

    public function getFastType(): string
    {
        return $this->fastType;
    }

    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    public function getActionUrl(): string
    {
        return $this->actionUrl;
    }
}
