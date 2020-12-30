<?php

declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages\BuiltIn\Appearance;

use MykhailoSukovitsyn\WordPress\Admin\Pages\AbstractCoreSubPage;
use MykhailoSukovitsyn\WordPress\Roles\Capability;

final class ThemeEditor extends AbstractCoreSubPage
{
    public function getTitle(): string
    {
        return __('Theme Editor');
    }

    public function getMenuTitle(): string
    {
        return __('Theme Editor');
    }

    public function getCapability(): string
    {
        return Capability::EDIT_THEMES;
    }

    public function getMenuSlug(): string
    {
        return 'theme-editor.php';
    }

    public function getPosition(): ?int
    {
        return null;
    }
}
