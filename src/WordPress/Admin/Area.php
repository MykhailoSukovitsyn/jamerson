<?php
declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin;

final class Area
{
    private $menu;


    public function getMenu(): Menu
    {
        if (!$this->menu) {
            $this->menu = new Menu();
        }

        return $this->menu;
    }
}
