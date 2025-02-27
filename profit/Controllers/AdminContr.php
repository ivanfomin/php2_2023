<?php

namespace Controllers;

use Models\Article;

class AdminContr extends BaseController
{
    public function actionAll($template = __DIR__ . '/../templates/admin_panel.php')
    {

            $this->view->articles = Article::findAll();
            $this->view->display($template);


            //$this->view->display(__DIR__ . '/../templates/access_denied.php');

    }

    public function updateArticle($template, $id)
    {
        $this->view->article = Article::findById($id);
        $this->view->display($template);
    }

}