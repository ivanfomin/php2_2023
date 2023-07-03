<?php

namespace Controllers;

use Models\Article;
use Models\Author;

class NewsContr extends BaseController
{
    public function actionAll($template = __DIR__ . '/../templates/articles.php')
    {
        if ($this->access()) {

            $this->view->articles = Article::findAll();
            $this->view->authors = Author::findAll();

            $this->view->display($template);
        } else {
            $this->view->display(__DIR__ . '/../templates/access_denied.php');
        }
    }

    public function actionOne($id, $template = __DIR__ . '/../templates/oneArticle.php')
    {
        $this->view->article = Article::findById($id);


        $this->view->display($template);

    }


}