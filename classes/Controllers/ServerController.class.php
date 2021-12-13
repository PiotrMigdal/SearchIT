<?php
namespace Controllers;

use Controllers\Controller;

class ServerController extends Controller {
    private $model;
    private $view;
    function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function index()
    {
        $data = $this->model->serverList();

        return $this->view->serversForm($data, $this->checkServers());
    }
}