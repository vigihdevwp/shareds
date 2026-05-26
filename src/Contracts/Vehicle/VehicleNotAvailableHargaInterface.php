<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts\Vehicle;

interface VehicleNotAvailableHargaInterface
{
    public function getHarga(): string;
    public function getPaketSewa(): string;
}
