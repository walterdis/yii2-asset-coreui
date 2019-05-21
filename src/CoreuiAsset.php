<?php

namespace Walterdis\Yii2\Asset\CoreUi;

use yii\web\AssetBundle;

/**
 * @author Walter Discher Cechinel <mistrim@gmail.com>
 */
class CoreuiAsset extends AssetBundle
{

    public $sourcePath = __DIR__ . '/dist/';
    public $css = [
        'vendors/@coreui/icons/css/coreui-icons.min.css',
        'vendors/flag-icon-css/css/flag-icon.min.css',
        'vendors/font-awesome/css/font-awesome.min.css',
        'vendors/simple-line-icons/css/simple-line-icons.css',
        'css/style.css', // Bootstrap 4
        'vendors/pace-progress/css/pace.min.css',
    ];
    public $js = [
        #'vendors/jquery/js/jquery.min.js',
        'vendors/popper.js/js/popper.min.js',
        'vendors/bootstrap/js/bootstrap.min.js',
        'vendors/pace-progress/js/pace.min.js',
        'vendors/perfect-scrollbar/js/perfect-scrollbar.min.js',
        'vendors/@coreui/coreui/js/coreui.min.js',
        'vendors/chart.js/js/Chart.min.js',
        'vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js',
    ];

}
