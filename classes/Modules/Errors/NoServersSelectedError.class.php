<?php
namespace Modules\Errors;

class NoServersSelectedError implements ErrorInterface
{
    public function draw()
    {
        $text[1] = "Hmmm... why not try to choose a server?";
        $text[2] = "When you don't get any results, it's kind of like buying an apple pie without an apple.";
        $text[3] = "Choose a server, what bad can happen?";
        $text[4] = "You have not selected a server, or..";
        $text[5] = "Almost there, just select any server.";
        echo '<div class="alert alert-danger" role="alert">
                ' . $text[rand(1, 5)] . '
            </div>';
    }
}