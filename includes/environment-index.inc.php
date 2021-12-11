<?php

use Models\Server;
use Views\EnvironmentView;
use Controllers\EnvironmentController;

$model = new Server();
$view = new EnvironmentView();
$controller = new EnvironmentController($model, $view);
$controller->index();