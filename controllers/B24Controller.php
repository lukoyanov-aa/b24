<?php

namespace app\modules\b24\controllers;

use \yii\web\Controller;
use Yii;
use app\modules\b24\models\B24portal;

/**
 * Description of appController
 *
 * @author Админ
 */
class B24Controller extends Controller {

    protected $arB24App;    
    protected $b24_error = '';
    protected $moduleParams;
    protected $arScope = ['user'];

    public function beforeAction($action) {
        $this->moduleParams = \Yii::$app->controller->module->params;
        return parent::beforeAction($action);
    }

}
