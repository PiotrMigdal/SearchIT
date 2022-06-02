<?php

use Models\Task;
use Modules\Errors\ErrorFactory;
use Views\TaskView;
use Controllers\TaskController;


$model = new Task();
$view = new TaskView();
$errorView = new ErrorFactory();
$controller = new TaskController($model, $view, $errorView);
$controller->index();