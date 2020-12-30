<?php

declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages\BuiltIn\Appearance;

use MykhailoSukovitsyn\WordPress\Admin\Pages\AbstractCoreSubPage;
use MykhailoSukovitsyn\WordPress\Roles\Capability;

final class Themes extends AbstractCoreSubPage
{
    public function getTitle(): string
    {
        return __('Themes');
    }

    public function getMenuTitle(): string
    {
        return __('Themes');
    }

    public function getCapability(): string
    {
        return current_user_can(Capability::SWITCH_THEMES)
            ? Capability::SWITCH_THEMES
            : Capability::EDIT_THEME_OPTIONS;
    }

    public function getMenuSlug(): string
    {
        return 'themes.php';
    }

    public function getPosition(): ?int
    {
        return 5;
    }
}
