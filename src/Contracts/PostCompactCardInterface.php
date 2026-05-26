<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts;

interface PostCompactCardInterface
{
    public function getTitle(): string;
    public function getImageUrl(): string;
    public function getActionUrl(): string;
    public function getSnippet(): string;
    public function getAuthor(): string;
    public function getPublishedDate(): string;
    public function getKategori(): string;
}
