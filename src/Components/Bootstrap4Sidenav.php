<?php

namespace Walterdis\Yii2\Asset\CoreUi\Components;

use Lavary\Menus\Common\Attr;
use Lavary\Menus\Item;

/**
 *
 * @author Walter Discher Cechinel <mistrim@gmail.com>
 */
class Bootstrap4Sidenav extends \Lavary\Menus\Renderer\Element
{

    /**
     * Stores attributes of the <ul> tag
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Stores attributes of the inner <ul> tags
     *
     * @var array
     */
    protected $dropdown = [];

    /**
     * Instantiates the formatter
     *
     */
    public function __construct(array $attributes = [], array $dropdown = [])
    {
        $this->attributes = $attributes;
        $this->dropdown = $dropdown;
    }

    /**
     * Returns the menu as an unordered list.
     *
     * @param \Lavary\Menus\Collection $collection
     *
     * @return string
     */
    public function render(\Lavary\Menus\Collection $collection)
    {
        return '<nav class="sidebar-nav">'
            . '<ul'
            . Attr::printAttributes(Attr::mergeAttributes($this->attributes, ['class' => 'nav']))
            . '>'
            . static::populate(
                $collection,
                'ul',
                array_merge($this->dropdown, ['class' => 'nav-dropdown-items'])
            )
            . '</ul>'
            . '</nav>';
    }

    /**
     * Hook for adding a caret symbol if item has children
     *
     * @param Item $item
     *
     * @return void
     */
    protected function addCaret(\Lavary\Menus\Item $item)
    {
        if ($item->hasChildren()) {
            $item->appendText(' <span class="caret"></span>');
        }
    }

    /**
     * Check if the item is a raw item in a bootstrap template
     *
     * @param Item $item
     *
     * @return void
     */
    protected function disableRaw(\Lavary\Menus\Item $item)
    {
        if (!$item->getLink()) {
            /*
              $item->addClass('disabled')
              ->prependText('<a href="#">')
              ->appendText('</a>');
             *
             */
        }
    }

    /**
     * Add required Bootstrap classes to the item
     *
     * @param Item $item
     *
     * @return void
     */
    protected function addBootstrapStyles(\Lavary\Menus\Item $item)
    {
        $link = $item->getLink();
        if ($item->hasChildren()) {
            $item->attr(Attr::mergeAttributes($item->attr(), ['class' => 'nav-item nav-dropdown']));
            if ($link) {
                $link->attr(Attr::mergeAttributes($link->attr(), ['class' => 'nav-link nav-dropdown-toggle']));
            }
        } else {
            $item->attr(Attr::mergeAttributes($item->attr(), ['class' => 'nav-item']));
            if ($link) {
                $link->attr(Attr::mergeAttributes($link->attr(), ['class' => 'nav-link']));
            }
        }
    }

    /**
     * List of the hooks to be executed before an item is rendered
     *
     * @return array
     */
    protected function hooks()
    {
        return [
            'addCaret',
            'disableRaw',
            'addBootstrapStyles'
        ];
    }

}
