<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAddAsset extends AssetBundle
{
    //public $sourcePath = '@app/web/themes/watermelon/assets';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css =
    [
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css',
        '/css/style.css',
        '/css/mdb.min.css',
        '/css/bootstrap.min.css'
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
