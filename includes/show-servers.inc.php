<?php

//use Views\ServerView;
//
//$list = new ServerView();
//$list->showServerButtons();
use Models\Server;
use Views\ServerView;
use Controllers\ServerController;

$serverModel = new Server();
$serverView = new ServerView();
$controller = new ServerController($serverModel, $serverView);
$controller->index();