<?php
declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages\BuiltIn;

use MykhailoSukovitsyn\WordPress\Admin\Pages\AbstractCoreSubPage;

final class Themes extends AbstractCoreSubPage
{
    public function getTitle(): string
    {
        return __( 'Themes' );
    }


    public function getMenuTitle(): string
    {
        return __( 'Themes' );
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
        return 5;
    }
}
