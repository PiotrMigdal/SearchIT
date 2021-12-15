<?php

namespace Views;

class ErrorView
{
    public function errorMessage($message)
    {
        if ($message=== "enter3characters") {
            echo '<div class="alert alert-danger" role="alert">
                Enter minimum 3 characters in search
            </div>';
        }
        if ($message === "noServersSelected") {
            echo '<div class="alert alert-danger" role="alert">
                Select at least one server
            </div>';
        }
        if ($message === "noResults") {
            echo '<div class="alert alert-warning" role="alert">
                Nothing found :(
            </div>';
        }
    }
}