<?php
declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages;

class BasePage implements PageInterface
{
    protected $title;

    protected $menuTitle;

    protected $capability;

    protected $menuSlug;

    protected $icon;

    protected $position;

    /** @var array|SubPageInterface[] $subPages */
    protected $subPages = [];


    public function __construct(
        string $title,
        string $menuTitle,
        string $capability,
        string $menuSlug,
        string $icon = '',
        ?int $position = null
    ) {
        $this->title = $title;
        $this->menuTitle = $menuTitle;
        $this->capability = $capability;
        $this->menuSlug = $menuSlug;
        $this->icon = $icon;
        $this->position = $position;
    }


    public function getTitle(): string
    {
        return $this->title;
    }


    public function getMenuTitle(): string
    {
        return $this->menuTitle;
    }


    public function getCapability(): string
    {
        return $this->capability;
    }


    public function getMenuSlug(): string
    {
        return $this->menuSlug;
    }


    public function getIcon(): string
    {
        return $this->icon;
    }


    public function getPosition(): ?int
    {
        return $this->position;
    }


    public function addSubPage(SubPageInterface $subPage): void
    {
        if (!$this->subPages) {
            add_action('admin_menu', function() {
                foreach ($this->subPages as $page) {
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
            }, 1010);
        }

        $this->subPages[] = $subPage;
    }


    public function removeSubPage(SubPageInterface $subPage): void
    {
        // TODO
        remove_submenu_page($this->getMenuSlug(), $subPage->getMenuSlug());
    }
}
