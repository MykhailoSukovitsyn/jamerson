<?php

declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages;

use MykhailoSukovitsyn\Misc\SingletonTrait;

abstract class AbstractCorePage extends AbstractPage
{
    use SingletonTrait;

    public function isCore(): bool
    {
        return true;
    }
}
