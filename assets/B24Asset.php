<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\modules\b24\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class B24Asset extends AssetBundle
{
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
    //public $sourcePath = '@webAsset';
    // путь к директории, содержимое которой надо опубликовать
    public $sourcePath = '@app/modules/b24/assets/web/';
    public $css = [        
    ];
    public $js = [        
        'js/application.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
