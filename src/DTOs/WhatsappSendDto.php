<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs;

use VigihdevWP\Shareds\Contracts\WhatsappSendInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class WhatsappSendDto implements WhatsappSendInterface
{

    public function __construct(
        #[SerializedName('image_url')]
        private readonly string $imageUrl,
        #[SerializedName('contact_number')]
        private readonly string $contactNumber,
        private readonly string $username,
        private readonly string $message,
    ) {}

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getContactNumber(): string
    {
        return $this->contactNumber;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
