<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs\Vehicle;

use VigihdevWP\Shareds\Contracts\Bootstrap\ButtonActionInterface;
use VigihdevWP\Shareds\Contracts\Vehicle\VehicleMultiHargaInterface;
use VigihdevWP\Shareds\DTOs\Bootstrap\ButtonActionDto;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class VehicleMultiHargaDto implements VehicleMultiHargaInterface
{

    /**
     *
     * @param string $namaMobil
     * @param string $imageUrl
     * @param string $tipeMobil
     * @param ButtonActionDto|ButtonActionInterface $button
     * @param VehicleCompactHargaDto[]|VehicleNotAvailableHarga[] $paketHargas
     * @return void
     */
    public function __construct(
        #[SerializedName("nama_mobil")]
        private readonly string $namaMobil,
        #[SerializedName("image_url")]
        private readonly string $imageUrl,
        #[SerializedName("tipe_mobil")]
        private readonly string $tipeMobil,
        #[SerializedName("paket_hargas")]
        private readonly array $paketHargas,
        private readonly ButtonActionInterface $button

    ) {}

    /**
     *
     * @return ButtonActionDto
     */
    public function getButtonAction(): ButtonActionInterface
    {
        return $this->button;
    }

    public function getPaketHargas(): array
    {
        return $this->paketHargas;
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
