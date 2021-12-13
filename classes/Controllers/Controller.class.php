<?php
namespace Controllers;


class Controller {

    protected function checkServers() {
        //add error messages and add minimum number of characters
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