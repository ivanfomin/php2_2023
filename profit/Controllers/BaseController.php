<?php

namespace Controllers;

abstract class BaseController
{
    protected $view;

    public function __construct()
    {
        $this->view = new \App\View();
    }

    protected function access(): bool
    {
        if (mt_rand(0,5) > 1) {
            return  true;
        }
        return false;
    }
}