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

$question = '����� �� � PHP?';
$answer   = $answers[mt_rand(0, count($answers) - 1)];

echo "������: {$question}\n �����: {$answer}";

?>
