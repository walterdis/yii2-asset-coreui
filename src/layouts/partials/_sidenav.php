<?php

use Walterdis\Yii2\Asset\CoreUi\Components\Bootstrap4;
use Lavary\Menus\Item;
use Lavary\Menus\MenuBuilder;
use yii\helpers\Url;

echo \Walterdis\Yii2\Asset\CoreUi\Menu\Sidenav::render();
?>
<!--
<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= Url::to(['site/index']) ?>">
                <i class="nav-icon icon-home"></i> Index
            </a>
        </li>
        <li class="nav-title">Theme</li>
        <li class="nav-item">
            <a class="nav-link" href="<?= Url::to(['category/index']) ?>">
                <i class="nav-icon icon-folder"></i> Categorias</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= Url::to(['content/index']) ?>">
                <i class="nav-icon icon-pencil"></i> Conteúdos</a>
        </li>
        <li class="nav-title">
            Components
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-puzzle"></i> Base</a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="base/breadcrumb.html">
                        <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="base/cards.html">
                        <i class="nav-icon icon-puzzle"></i> Cards</a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="nav-icon icon-pie-chart"></i> Charts</a>
        </li>

        <li class="divider"></li>
        <li class="nav-title">Extras</li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-star"></i> Pages</a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="login.html" target="_top">
                        <i class="nav-icon icon-star"></i> Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.html" target="_top">
                        <i class="nav-icon icon-star"></i> Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="404.html" target="_top">
                        <i class="nav-icon icon-star"></i> Error 404</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="500.html" target="_top">
                        <i class="nav-icon icon-star"></i> Error 500</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
-->
<button class="sidebar-minimizer brand-minimizer" type="button"></button>