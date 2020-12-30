<?php

declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages\BuiltIn;

use MykhailoSukovitsyn\WordPress\Admin\Pages\AbstractCorePage;
use MykhailoSukovitsyn\WordPress\Admin\Pages\BuiltIn\Appearance\{
    Background,
    Customize,
    Header,
    Menus,
    ThemeEditor,
    Themes
};
use MykhailoSukovitsyn\WordPress\Roles\Capability;

final class Appearance extends AbstractCorePage
{
    protected function __construct()
    {
        $this->addSubPageInternal(Themes::getInstance());
        $this->addSubPageInternal(Customize::getInstance());

        if (current_theme_supports('menus') || current_theme_supports('widgets')) {
            $this->addSubPageInternal(Menus::getInstance());
        }

        if (current_theme_supports('custom-header') && current_user_can(Capability::CUSTOMIZE)) {
            $this->addSubPageInternal(Header::getInstance());
        }

        if (current_theme_supports('custom-background') && current_user_can(Capability::CUSTOMIZE)) {
            $this->addSubPageInternal(Background::getInstance());
        }

        if (!is_multisite()) {
            $this->addSubPageInternal(ThemeEditor::getInstance());
        }
    }

    public function getIcon(): string
    {
        return 'dashicons-admin-appearance';
    }

    public function getTitle(): string
    {
        return __('Appearance');
    }

    public function getMenuTitle(): string
    {
        return __('Appearance');
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
        return 60;
    }
}
