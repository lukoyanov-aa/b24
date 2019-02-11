<?php

namespace app\modules\b24;
use Yii;
/**
 * b24 module definition class
 */
class module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\b24\controllers';
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        \Yii::configure($this, require __DIR__ . '/config.php');
        $this->layout = 'main';
        $this->setAliases([ 
            '@webB24Asset' => '@web'.'/b24/assets/web', 
        ]);

    }
}
