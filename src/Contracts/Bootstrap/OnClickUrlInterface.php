<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts\Bootstrap;


interface OnClickUrlInterface extends OptionsInterface
{
    public function getUrl(): string;
}
