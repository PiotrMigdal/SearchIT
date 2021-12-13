<?php

use Models\Task;
use Views\TaskView;
use Controllers\TaskController;


$model = new Task();
$view = new TaskView();
$controller = new TaskController($model, $view);
$controller->index();