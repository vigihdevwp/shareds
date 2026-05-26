<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts\Vehicle;

use VigihdevWP\Shareds\Contracts\Bootstrap\ButtonActionInterface;

interface VehicleCompactInterface
{
    public function getNamaMobil(): string;
    public function getImageUrl(): string;
    public function getTipeMobil(): string;
    public function getButtonAction(): ButtonActionInterface;
}
