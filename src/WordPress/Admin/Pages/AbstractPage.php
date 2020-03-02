<?php
declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages;

abstract class AbstractPage implements PageInterface
{
    /** @var array|SubPageInterface[] $subPages */
    protected $subPages = [];

    /** @var array|SubPageInterface[] $removalQueue Used only to remove core pages with remove_submenu_page() function */
    protected $removalQueue = [];

    protected $hookInitialized = false;


    final public function addSubPage(SubPageInterface $subPage): void
    {
        $this->initHook();

        $this->subPages[$subPage->getMenuSlug()] = $subPage;
    }


    final public function removeSubPage(SubPageInterface $subPage): void
    {
        $this->initHook();

        if ($subPage->isCore() && !isset($this->removalQueue[$subPage->getMenuSlug()])) {
            $this->removalQueue[$subPage->getMenuSlug()] = $subPage;
        }

        unset($this->subPages[$subPage->getMenuSlug()]);
    }


    protected function initHook(): void
    {
        if ($this->hookInitialized) {
            return;
        }

        add_action('admin_menu', function() {
            foreach ($this->subPages as $pageSlug => $page) {
                add_submenu_page(
                    $this->getMenuSlug(),
                    $page->getTitle(),
                    $page->getMenuTitle(),
                    $page->getCapability(),
                    $page->getMenuSlug(),
                    function() {}, // TODO:
                    $page->getPosition()
                );
            }

            foreach ($this->removalQueue as $pageSlug => $page) {
                remove_submenu_page($this->getMenuSlug(), $page->getMenuSlug());
            }
        }, 1010);

        $this->hookInitialized = true;
    }
}
