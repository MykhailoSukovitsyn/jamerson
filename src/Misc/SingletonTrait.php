<?php

declare(strict_types=1);

namespace MykhailoSukovitsyn\Misc;

trait SingletonTrait
{
    protected static $instance;

    protected function __construct() { }

    protected function __clone() { }

    protected function __wakeup() { }

    public static function getInstance(): self
    {
        return self::$instance ?: self::$instance = new static();
    }
}
