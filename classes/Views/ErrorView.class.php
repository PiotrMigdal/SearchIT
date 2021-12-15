<?php

namespace Views;

class ErrorView
{
    public function errorMessage($message)
    {
        if ($message=== "enter3characters") {
            $text[1] = "Why did you enter less than 3 characters? How many million records do you expect to receive?";
            $text[2] = "Take a break and go to the Morrisons. When you get back, enter a minimum of 3 letters in search.";
            $text[3] = "Hmmm.. is it you searching? Enter at least 3 letters in the search..";
            $text[4] = "Above there is a rectangle with the word SEARCH. Enter there 3 letters and press the button.";
            $text[5] = "You have entered less than 3 characters... again... :/";
            echo '<div class="alert alert-danger" role="alert">
                ' . $text[rand(1, 5)] . '
            </div>';
        }
        if ($message === "noServersSelected") {
            $text[1] = "Hmmm... why not try to choose a server?";
            $text[2] = "When you don't get any results, it's kind of like buying an apple pie without an apple.";
            $text[3] = "Choose a server, what bad can happen?";
            $text[4] = "You have not selected a server, or..";
            $text[5] = "Almost there, just select any server.";
            echo '<div class="alert alert-danger" role="alert">
                ' . $text[rand(1, 5)] . '
            </div>';
        }


        if ($message === "noResults") {
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
}