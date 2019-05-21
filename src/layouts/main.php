<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

app\assets\coreui\CoreuiAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        <?php $this->beginBody() ?>

        <header class="app-header navbar navbar-dark bg-dark">
            <?= $this->render('partials/_header'); ?>
        </header>

        <div class="app-body">
            <div class="sidebar">
                <?= $this->render('partials/_sidenav'); ?>
            </div>
            <main class="main">
                <!-- Breadcrumb-->
                <?= $this->render('partials/_breadcrumb'); ?>
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <?= $content ?>
                    </div>
                </div>
            </main>
            <aside class="aside-menu">
                <?= $this->render('partials/_sidecontrol') ?>
            </aside>
        </div>
        <footer class="app-footer">
            <div>
                <a href="https://coreui.io">CoreUI</a>
                <span>&copy; 2018 creativeLabs.</span>
            </div>
            <div class="ml-auto">
                <span>Powered by</span>
                <a href="https://coreui.io">CoreUI</a>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>