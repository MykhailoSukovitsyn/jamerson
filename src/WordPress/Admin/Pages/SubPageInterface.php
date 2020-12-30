<?php

namespace MykhailoSukovitsyn\WordPress\Admin\Pages;

interface SubPageInterface
{
    public function getTitle(): string;

    public function getMenuTitle(): string;

    public function getCapability(): string;

    public function getMenuSlug(): string;

    public function getPosition(): ?int;

    public function isCore(): bool;
}
