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

    private function checkGetRequest() {
        // Jak Dani. Sprawdzic czy ifset get

        //jezeli jest to sprawdzic czy server jest na liscie z model
    }

    public function index()
    {
        //Execute checkgetrequest, if all ok

        // https://stackoverflow.com/questions/44875020/send-variables-by-using-get-in-php-mvc
//        $data = $this->model->get_data_from_server($_GET['page']);

        //Return view
//        $this->view->generate('tasks_view.php', 'template_view.php', $data);
        return $this->view->showServerButtons();
    }
}