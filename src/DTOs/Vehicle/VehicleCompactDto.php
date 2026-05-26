<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs\Vehicle;

use VigihdevWP\Shareds\Contracts\Bootstrap\ButtonActionInterface;
use VigihdevWP\Shareds\Contracts\Vehicle\VehicleCompactInterface;
use VigihdevWP\Shareds\DTOs\Bootstrap\ButtonActionDto;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class VehicleCompactDto implements VehicleCompactInterface
{

    /**
     *
     * @param string $namaMobil
     * @param string $imageUrl
     * @param string $tipeMobil
     * @param ButtonActionDto $button
     * @return void
     */
    public function __construct(
        #[SerializedName("nama_mobil")]
        private readonly string $namaMobil,
        #[SerializedName("image_url")]
        private readonly string $imageUrl,
        #[SerializedName("tipe_mobil")]
        private readonly string $tipeMobil,
        private readonly ButtonActionInterface $button
    ) {}

    public function getButtonAction(): ButtonActionInterface
    {
        return $this->button;
    }

    public function getNamaMobil(): string
    {
        return $this->namaMobil;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getTipeMobil(): string
    {
        return $this->tipeMobil;
    }
}
