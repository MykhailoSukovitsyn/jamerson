<?php

declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages\BuiltIn\Appearance;

use MykhailoSukovitsyn\WordPress\Admin\Pages\AbstractCoreSubPage;

final class Background extends AbstractCoreSubPage
{
    public function getTitle(): string
    {
        return __('Background');
    }

    public function getMenuTitle(): string
    {
        return __('Background');
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
                'control' => 'background_image'
            ]
        ], $customizeUrl);
    }

    public function getPosition(): ?int
    {
        return 20;
    }
}
