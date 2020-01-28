<?php

namespace MykhailoSukovitsyn\WordPress\Admin;

use MykhailoSukovitsyn\WordPress\Admin\Pages\PageInterface;

final class Menu
{
    /** @var array|PageInterface[] $pages */
    private $pages = [];


    public function addPage(PageInterface $page): void
    {
        if (!$this->pages) {
            add_action( 'admin_menu', [$this, 'addMenuPagesToWordPress'], 1000 );
        }

        $this->pages[] = $page;
    }


    /**
     * This method should NOT be called directly
     */
    public function addMenuPagesToWordPress(): void
    {
        foreach ($this->pages as $page) {
            add_menu_page(
                $page->getTitle(),
                $page->getMenuTitle(),
                $page->getCapability(),
                $page->getMenuSlug(),
                function() { }, // TODO:
                $page->getIcon(),
                $page->getPosition()
            );
        }
    }
}
