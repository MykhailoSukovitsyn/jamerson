<?php

declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages\BuiltIn\Appearance;

use MykhailoSukovitsyn\WordPress\Admin\Pages\AbstractCoreSubPage;

final class Header extends AbstractCoreSubPage
{
    public function getTitle(): string
    {
        return __('Header');
    }

    public function getMenuTitle(): string
    {
        return __('Header');
    }

    public function getCapability(): string
    {
        return current_user_can('switch_themes') ? 'switch_themes' : 'edit_theme_options';
    }

    public function getMenuSlug(): string
    {
        $returnUrl = urlencode(remove_query_arg(wp_removable_query_args(), wp_unslash( $_SERVER['REQUEST_URI'])));
        $customizeUrl = add_query_arg('return', $returnUrl, 'customize.php');

        return add_query_arg([
            'autofocus' => [
                'control' => 'header_image'
            ]
        ], $customizeUrl);
    }

    public function getPosition(): ?int
    {
        return 15;
    }
}
