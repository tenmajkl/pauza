<?php

function randomWord(String $file)
{
    $content = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . $file);
    $words = explode(PHP_EOL, $content);
    unset($words[array_key_last($words)]);
    return $words[array_rand($words)];
}
