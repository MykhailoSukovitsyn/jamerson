<?php

declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages\BuiltIn\Appearance;

use MykhailoSukovitsyn\WordPress\Admin\Pages\AbstractCoreSubPage;

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
        return 'edit_theme_options';
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
