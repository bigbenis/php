<?php

error_reporting(-1);

$answers = array(
    'yes',
    'no',
    'dont know',
    'never',
    'all in your hands',
    'ask me later'
);

$question = 'Выучу ли я PHP?';
$answer   = $answers[mt_rand(0, count($answers) - 1)];

echo "Вопрос: {$question}\n Ответ: {$answer}";

?>
