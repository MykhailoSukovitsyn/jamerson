<?php
declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages\BuiltIn;

use MykhailoSukovitsyn\WordPress\Admin\Pages\AbstractCorePage;

final class Appearance extends AbstractCorePage
{
    private function __construct()
    {
        $themesPage = Themes::getInstance();

        $this->subPages = [
            $themesPage->getMenuSlug() => $themesPage
        ];
    }


    public function getIcon(): string
    {
        return 'dashicons-admin-appearance';
    }


    public function getTitle(): string
    {
        return __( 'Appearance' );
    }


    public function getMenuTitle(): string
    {
        return __( 'Appearance' );
    }


    public function getCapability(): string
    {
        return current_user_can('switch_themes') ? 'switch_themes' : 'edit_theme_options';
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
