<?php

namespace App\Controllers;

use App\View;

class Service
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
        $this->view->services = \App\Models\Service::findAll();
        $this->view->news = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../templates/index.php');
    }

    protected function actionCatalog()
    {
        $this->view->services = \App\Models\Service::findAll();
        $this->view->display(__DIR__ . '/../templates/catalog.php');
    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->service = \App\Models\Service::findById($id);
        $this->view->display(__DIR__ . '/../templates/one.php');

    }

    protected function actionNews()
    {
        $this->view->news = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../templates/news.php');
    }

    protected function actionArticle()
    {
        $id = (int)$_GET['id'];
        $this->view->news = \App\Models\Article::findById($id);
        $this->view->display(__DIR__ . '/../templates/article.php');

    }

    protected function actionGrade()
    {
        $this->view->news = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../templates/grade.php');
    }
}

