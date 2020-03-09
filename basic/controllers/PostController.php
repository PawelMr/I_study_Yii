<?php


namespace app\controllers;

use Yii;

class PostController extends AppController
{
   public  $layout = 'basic';
    public  function actionIndex(){

        if (Yii::$app->request->isAjax){
            $this->debug($_GET);
//            return 'test';

        }
        //$names=['ivan','max','taks'];
        // print_r ($names);
        //var_dump(Yii::$app);
        //$this->debug($names);
        $aj = $_GET;
        return $this->render('index', ['aj' => $aj]);
    }
    public  function actionShow(){
//        $this -> layout = 'basic';
                return $this->render('show');
    }
}

