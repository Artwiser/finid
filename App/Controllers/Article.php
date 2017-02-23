<?php

namespace App\Controllers;

use App\Exceptions\Core;
use App\Exceptions\Db;
use App\View;

class Article
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    protected function beforeAction()
    {

    }

    protected function actionIndex()
    {
        $this->view->news = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../templates/index.php');
    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\Article::findById($id);
        $this->view->display(__DIR__ . '/../templates/one.php');

    }
}