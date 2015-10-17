<?php

class View
{
    private $model;
    private $controller;

    public function __construct(Model $model, Controller $controller)
    {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output()
    {
        return '<p><a href="app.php?action=clicked">' . $this->model->string . '</a>';
    }
}