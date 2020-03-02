<?php
declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages;

use MykhailoSukovitsyn\Misc\SingletonTrait;

abstract class AbstractCoreSubPage implements SubPageInterface
{
    use SingletonTrait;


    public function isCore(): bool
    {
        return true;
    }
}
