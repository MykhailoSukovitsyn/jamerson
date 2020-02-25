<?php
declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin;

use MykhailoSukovitsyn\WordPress\Admin\Pages\PageInterface;

final class Menu
{
    /** @var array|PageInterface[] $corePages */
    private $corePages = [];

    /** @var array|PageInterface[] $pages */
    private $pages = [];


    public function __construct()
    {
        // TODO: init $corePages property with data
    }


    public function addPage(PageInterface $page): void
    {
        if (isset($this->corePages[$page->getMenuSlug()])) {
            // TODO: Throw exception
        }

        if (isset($this->pages[$page->getMenuSlug()])) {
            // TODO: Throw exception
        }

        // Page was not added yet and it is not core page

        if (!$this->pages) {
            // On first call init WordPress action

            add_action('admin_menu', function() {
                // This closure helps us to get rid of public method

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
            }, 1000);
        }

        $this->pages[$page->getMenuSlug()] = $page;
    }


    public function removePage(PageInterface $page): void
    {
        unset($this->pages[$page->getMenuSlug()]);

        // TODO:
//        remove_menu_page($page->getMenuSlug());
    }
}
