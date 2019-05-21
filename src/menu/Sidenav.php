<?php

namespace Walterdis\Yii2\Asset\CoreUi\Menu;

use Walterdis\Yii2\Asset\CoreUi\Components\Bootstrap4;
use Lavary\Menus\Item;
use Lavary\Menus\MenuBuilder;
use yii\helpers\Url;

/**
 * Example menu with Lavarys
 *
 * @author Walter Discher Cechinel <mistrim@gmail.com>
 */
class Sidenav
{

    /**
     * @author Walter Discher Cechinel <mistrim@gmail.com>
     * @return MenuBuilder
     */
    public static function build()
    {
        $builder = new MenuBuilder();

        $builder->make('left-sidenav', function(Item $menu) {
            $menu->raw('Main Menu', ['class' => 'nav-title'])->data('isVisible', true);

            $menu->add('Home', Url::to(['site/index']))
                ->prependText('<i class="fab fa-wolf-pack-battalion"></i> ')
                ->data('isVisible', true);

            $menu->add('The Ents', Url::to(['/ents']))
                ->prependText('<i class="fas fa-tree"></i> ')
                ->data('isVisible', true);

            $menu->add('Mordor', Url::to(['/place/mordor']))
                ->prependText('<i class="fas fa-khanda"></i> ')
                ->data('isVisible', true);

            $menu->add('Peoples')
                ->prependText('<i class="fas fa-users"></i> ')
                ->data('isVisible', true);

            $menu->peoples->add('Gandalf', Url::to(['/people/gandalf']))
                ->prependText('<i class="fas fa-hat-wizard"></i> ')
                ->data('isVisible', true);

            $menu->peoples->add('Frodo', Url::to(['/people/frodo']))
                ->prependText('<i class="fas fa-shoe-prints"></i> ')
                ->data('isVisible', true);
        })->filter('isVisible', true);

        return $builder;
    }

    /**
     *
     * @param type $builder
     * @return type
     */
    public static function render()
    {
        $main = static::build();
        return $main->get('left-sidenav')->render(new Bootstrap4());
    }

}
