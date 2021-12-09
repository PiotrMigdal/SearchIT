<?php
namespace Controllers;


class ServerController {
    private $model;
    private $view;
    function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function index()
    {
        if (!isset($_GET["servers"])) {
            header("location: ../../index.php?notification=no-servers-selected");
        }
        $data = $this->model->serversWithGet($_GET["servers"]);

        return $this->view->serversForm($data);
    }
}