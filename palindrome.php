<?php

error_reporting(-1);


$text = "А роза упала на лапу Азора";
$result = 'палиндром';


$trimmed = str_replace(" ", "", $text);
$text = mb_strtolower($trimmed);

$lenght = mb_strlen($text);
$halfLenth = floor($lenght / 2);

$start = 0;
$end = mb_strlen($text) - 1;

for ($i = 0; $i <= $halfLength; $i++) {
    $symb1 = mb_substr($text, $start, 1);
    $symb2 = mb_substr($text, $end, 1);
    if ($symb1 == $symb2) {
        $start++;
        $end--;
        echo "{$symb1} = {$symb2}\n";
    } else {
        echo "{$symb1} & {$symb2}\n";
        echo "Нихуя\n";
        break;
    }

}
echo "Результат: {$result}";

?>