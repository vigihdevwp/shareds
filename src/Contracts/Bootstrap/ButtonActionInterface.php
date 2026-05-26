<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts\Bootstrap;


interface ButtonActionInterface extends OptionsInterface
{
    public function getUrl(): string;
    public function getLabel(): string;
}
