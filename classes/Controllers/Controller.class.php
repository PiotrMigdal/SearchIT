<?php
namespace Controllers;


class Controller {
    protected function checkStatus() {
        if(isset($_GET["activeonly"])) {
            return true;
        }
    }
    protected function checkRequest() {
        if(!empty($_GET)) {
            return true;
        }
    }

    protected function checkServers() {
        if(isset($_GET["servers"])) {
            return $_GET["servers"];
        }
    }

    protected function checkSearch() {
        if(isset($_GET["search"])) {
            return $_GET["search"];
        }
    }
}