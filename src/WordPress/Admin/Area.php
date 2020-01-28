<?php

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
