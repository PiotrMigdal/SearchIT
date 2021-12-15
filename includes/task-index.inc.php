<?php

use Models\Task;
use Views\TaskView;
use Views\ErrorView;
use Controllers\TaskController;


$model = new Task();
$view = new TaskView();
$errorView = new ErrorView();
$controller = new TaskController($model, $view, $errorView);
$controller->index();