<?php

error_reporting(-1);

$code = array(
    'a' => '4',
    'b' => 'I3',
    'c' => '(',
    'd' => '[)',
    'e' => '€',
    'f' => 'ƒ',
    'g' => '9',
    'h' => '|-|',
    'i' => '1',
    'j' => ']',
    'l' => '|_',
    'k' => '|<',
    'm' => '|\/|',
    'n' => '|\|',
    'o' => '0',
    'p' => '|o',
    'q' => '&',
    'r' => 'I2',
    's' => '5',
    't' => '+',
    'u' => '(_)',
    'v' => '\/',
    'w' => '\/\/',
    'x' => '><',
    'y' => '`/',
    'z' => '7_',
);

$text = "govnag";
$chiper = strtr($text, $code);
$flipped = array_flip($code);
$dechiper = strtr($chiper, $flipped);


echo "{$chiper}\n {$dechiper}";

?>
