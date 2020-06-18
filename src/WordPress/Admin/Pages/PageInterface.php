<?php

declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages;

interface PageInterface extends SubPageInterface
{
    public function getIcon(): string;

    public function addSubPage(SubPageInterface $subPage): void;

    public function removeSubPage(SubPageInterface $subPage): void;
}
