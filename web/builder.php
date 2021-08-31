<?php

require "words.php";

function build()
{
    $subject = ucfirst(randomWord("words" . DIRECTORY_SEPARATOR . "subjects.txt"));
    $adjective = randomWord("words" . DIRECTORY_SEPARATOR . "adjectives.txt");

    return "$subject $adjective? No to pauza!"; 
}
