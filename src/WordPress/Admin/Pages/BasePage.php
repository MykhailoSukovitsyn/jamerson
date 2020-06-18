<?php

declare(strict_types=1);

namespace MykhailoSukovitsyn\WordPress\Admin\Pages;

class BasePage extends AbstractPage
{
    protected $title;

    protected $menuTitle;

    protected $capability;

    protected $menuSlug;

    protected $icon;

    protected $position;

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

    final public function isCore(): bool
    {
        return false;
    }
}
