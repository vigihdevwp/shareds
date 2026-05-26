<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs\Vehicle;

use VigihdevWP\Shareds\Contracts\Bootstrap\ButtonActionInterface;
use VigihdevWP\Shareds\Contracts\Vehicle\VehicleInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class VehicleDto implements VehicleInterface
{

    /**
     *
     * @param string $namaMobil
     * @param string $imageUrl
     * @param int $harga
     * @param string $paketSewa
     * @param string $tipeMobil
     * @param ButtonActionDto|ButtonActionInterface $button
     * @return void
     */
    public function __construct(
        #[SerializedName("nama_mobil")]
        private readonly string $namaMobil,
        #[SerializedName("image_url")]
        private readonly string $imageUrl,
        private readonly int $harga,
        #[SerializedName("paket_sewa")]
        private readonly string $paketSewa,
        #[SerializedName("tipe_mobil")]
        private readonly string $tipeMobil,
        private readonly ButtonActionInterface $button
    ) {
        // Validasi basic
        if ($harga < 0) {
            throw new \InvalidArgumentException('Harga tidak boleh negatif');
        }
    }

    /**
     *
     * @return ButtonActionDto
     */
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

    public function getHarga(): int
    {
        return $this->harga;
    }

    public function getPaketSewa(): string
    {
        return $this->paketSewa;
    }

    public function getTipeMobil(): string
    {
        return $this->tipeMobil;
    }

    public function getHargaFormatted(): string
    {
        return 'Rp ' . number_format($this->harga, 0, ',', '.');
    }
}
