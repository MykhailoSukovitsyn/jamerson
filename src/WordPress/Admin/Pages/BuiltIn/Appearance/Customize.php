<?php

declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages\BuiltIn\Appearance;

use MykhailoSukovitsyn\WordPress\Admin\Pages\AbstractCoreSubPage;
use MykhailoSukovitsyn\WordPress\Roles\Capability;

final class Customize extends AbstractCoreSubPage
{
    public function getTitle(): string
    {
        return __('Customize');
    }

    public function getMenuTitle(): string
    {
        return __('Customize');
    }

    public function getCapability(): string
    {
        return Capability::CUSTOMIZE;
    }

    public function getMenuSlug(): string
    {
//        $customize_url = add_query_arg( 'return', urlencode( remove_query_arg( wp_removable_query_args(), wp_unslash( $_SERVER['REQUEST_URI'] ) ) ), 'customize.php' );

        return 'customize.php';
    }

    public function getPosition(): ?int
    {
        return 6;
    }
}
