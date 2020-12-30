<?php

declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages\BuiltIn\Appearance;

use MykhailoSukovitsyn\WordPress\Admin\Pages\AbstractCoreSubPage;
use MykhailoSukovitsyn\WordPress\Roles\Capability;

final class Menus extends AbstractCoreSubPage
{
    public function getTitle(): string
    {
        return __('Menus');
    }

    public function getMenuTitle(): string
    {
        return __('Menus');
    }

    public function getCapability(): string
    {
        return Capability::EDIT_THEME_OPTIONS;
    }

    public function getMenuSlug(): string
    {
        return 'nav-menus.php';
    }

    public function getPosition(): ?int
    {
        return 10;
    }
}
