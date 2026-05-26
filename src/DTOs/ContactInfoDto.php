<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs;

use VigihdevWP\Shareds\Contracts\ContactInfoInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class ContactInfoDto implements ContactInfoInterface
{
    public function __construct(
        #[SerializedName('contact_value')]
        private readonly string $contactValue,
        #[SerializedName('contact_type')]
        private readonly string $contactType,
        #[SerializedName('icon_url')]
        private readonly string $iconUrl,
        #[SerializedName('action_url')]
        private readonly string $actionUrl,
        private readonly string $description,
    ) {}

    public function getContactValue(): string
    {
        return $this->contactValue;
    }

    public function getContactType(): string
    {
        return $this->contactType;
    }

    public function getDescription(): string
    {
        return $this->description;
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
