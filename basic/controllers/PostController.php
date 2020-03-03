<?php


namespace app\controllers;

use Yii;

class PostController extends AppController
{
   public  $layout = 'basic';
    public  function actionIndex(){
        //$names=['ivan','max','taks'];
        // print_r ($names);
        //var_dump(Yii::$app);
        //$this->debug($names);
        return $this->render('index');
    }
    public  function actionShow(){
//        $this -> layout = 'basic';
                return $this->render('show');
    }
}

