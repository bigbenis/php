<?php

error_reporting(-1);

$rates = array(3, 5, 3, 2, 1, 8, 4, 3, 4, 3, 2, 3);

$ratesSum = array_sum($rates);
$ratesCount = count($rates);
$averageRate = $ratesSum / $ratesCount;

echo "Анону поставили {$ratesCount} оценок, средний бал составил {$averageRate},\n Сумма оценок: {$ratesSum} ";

 ?>
