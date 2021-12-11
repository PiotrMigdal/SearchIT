<?php

use Models\Server;
use Views\ServerView;
use Controllers\ServerController;

$model = new Server();
$view = new ServerView();
$controller = new ServerController($model, $view);
$controller->index();