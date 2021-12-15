<?php
namespace Controllers;

use Controllers\Controller;

class TaskController extends Controller {
    private $model;
    private $view;
    private $errorView;

    function __construct($model, $view, $errorView)
    {
        $this->model = $model;
        $this->view = $view;
        $this->errorView = $errorView;
    }

    private function minSearchLen(): bool
    {
        $result = true;
        if(isset($_GET["search"])){
            if(strlen($_GET["search"]) > 2) {
                $result = true;
            } else {
                $result = false;
            }
        }
        return $result;
    }
    private function serversSelected(): bool
    {
        $result = true;
        if(isset($_GET["search"])){
            if(!isset($_GET["servers"])) {
                $result = false;
            } else {
                $result = true;
            }
        }
        return $result;
    }


    public function index()
    {
        if($this->minSearchLen() === false) {
            $this->errorView->errorMessage("enter3characters");
            exit();
        }
        if($this->serversSelected() === false) {
            $this->errorView->errorMessage("noServersSelected");
            exit();
        }
        if($this->checkServers() === null) {
            exit();
        }

        $data = $this->model->searchTasks($this->checkServers(), $this->checkSearch());

        if($data === []) {
            $this->errorView->errorMessage("noResults");
            exit();
        }
        return $this->view->foundTasks($data);
    }
}