<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts\Bootstrap;


interface EmailSenderInterface
{
    public function getEmail(): string;
    public function getMessage(): string;
    public function getSubject(): string;
}
