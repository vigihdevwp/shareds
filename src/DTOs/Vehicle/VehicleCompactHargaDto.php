<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\DTOs\Vehicle;

use VigihdevWP\Shareds\Contracts\Vehicle\VehicleCompactHargaInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class VehicleCompactHargaDto implements VehicleCompactHargaInterface
{

    public function __construct(
        private readonly int $harga,
        #[SerializedName("paket_sewa")]
        private readonly string $paketSewa,
    ) {}

    public function getHarga(): int
    {
        return $this->harga;
    }

    public function getPaketSewa(): string
    {
        return $this->paketSewa;
    }

    public function getHargaFormatted(): string
    {
        return 'Rp ' . number_format($this->harga, 0, ',', '.');
    }
}
