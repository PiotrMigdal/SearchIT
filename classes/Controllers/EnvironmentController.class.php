<?php
namespace Controllers;

use Controllers\Controller;

class EnvironmentController extends Controller{
    private $model;
    private $view;
    function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function index()
    {
        $data = $this->model->envList();

        return $this->view->envForm($data, $this->checkServers());
    }
}