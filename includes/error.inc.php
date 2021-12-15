<?php

if(isset($_GET["error"])) {
    if($_GET["error"] === "enter3characters") {
        echo    '<div class="alert alert-danger" role="alert">
                    Enter minimum 3 characters in search
                </div>';
    }
    if($_GET["error"] === "noServersSelected") {
        echo    '<div class="alert alert-danger" role="alert">
                    Select at least one server
                </div>';
    }
}