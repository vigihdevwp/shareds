<?php

declare(strict_types=1);

namespace VigihdevWP\Shareds\Contracts;

interface WalkerMenuInterface
{
    public function getName(): string;
    public function getMenuClass(): string;
    public function getMenuId(): string;
    public function getContainer(): string;
    public function getContainerClass(): string;
    public function getContainerId(): string;
    public function getContainerAriaLabel(): string;
    public function getBefore(): string;
    public function getAfter(): string;
    public function getLinkBefore(): string;
    public function getLinkAfter(): string;
    public function getEcho(): bool;
    public function getDepth(): int;
    public function getThemeLocation(): string;
    public function getItemsWrap(): string;
    public function getItemSpacing(): string;
}
