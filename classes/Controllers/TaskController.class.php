<?php
namespace Controllers;

use Controllers\Controller;

class TaskController extends Controller {
    private $model;
    private $view;
    function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function index()
    {
        if($this->checkServers() !== null && $this->checkServers() !== null) {
            $data = $this->model->searchTasks($this->checkServers(), $this->checkSearch());
            return $this->view->foundTasks($data);
        }
    }
}