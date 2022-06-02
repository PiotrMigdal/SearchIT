<?php
namespace Modules\Errors;

class NoResultsError implements ErrorInterface
{
    public function draw()
    {
        $text[1] = "Nothing found, please do not contact the administrator.";
        $text[2] = "When you don't get any results, it's kind of like buying an apple pie without an apple.";
        $text[3] = "Your pod noodle is empty - no results.";
        $text[4] = "No results but you will find it before others, I count on you!";
        $text[5] = "No results or you are doing something wrong. No, no results..";
        echo '<div class="alert alert-warning" role="alert">
                ' . $text[rand(1, 5)] . '
            </div>';
    }
}