<?php

namespace app\modules\b24\controllers;

use Yii;
use \yii\web\HttpException;

class AdminSecondController extends AdminController {
    
    public $layout = '@app/modules/b24/views/layouts/main.php';

    public function beforeAction($action) {
        $session = Yii::$app->session;
        $accessAllowed= $session->get('accessAllowed');
        if (!$accessAllowed) {
            throw new HttpException(404, 'Приложение необходимо запустить из портала Битрикс24');
        }
        $this->accessParams = $session['AccessParams'];
        return parent::beforeAction($action);
    }
    
    protected $accessParams;

}
