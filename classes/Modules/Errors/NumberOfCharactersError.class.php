<?php
namespace Modules\Errors;

class NumberOfCharactersError implements ErrorInterface
{
    public function draw()
    {
        $text[1] = "Why did you enter less than 3 characters? How many million records do you expect to receive?";
        $text[2] = "Take a break and go to the Morrisons. When you get back, enter a minimum of 3 letters in search.";
        $text[3] = "Hmmm.. is it you searching? Enter at least 3 letters in the search..";
        $text[4] = "Above there is a rectangle with the word SEARCH. Enter there 3 letters and press the button.";
        $text[5] = "You have entered less than 3 characters... again... :/";
        echo '<div class="alert alert-danger" role="alert">
                ' . $text[rand(1, 5)] . '
            </div>';
    }
}