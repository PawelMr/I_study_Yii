<?php


namespace app\controllers;



class MyController extends AppController
{
    public function actionIndex($id = null){
        $hi='hello World';
        $names=['ivan','max','taks'];
        if (!$id) $id='test';
        //return $this->render('index', ['hello'=> $hi, 'names' => $names]);
        return $this->render('index', compact('names','hi','id' ));
    }
    public function actionBlogPost(){
        // my/blog-post
        return 'Blog Post';
    }
}