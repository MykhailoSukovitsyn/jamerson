<?php
declare(strict_types=1);

namespace MykhailoSukovitsyn\Misc;

trait SingletonTrait
{
    private static $instance;


    private function __construct() { }
    private function __clone() { }
    private function __wakeup() { }


    public static function getInstance(): self
    {
        return self::$instance ?: self::$instance = new static();
    }
}
