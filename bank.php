<?php

$balance = 1000;
$yearPercent = 1.1;
$old = 16;
$year = 1;

for ($balance = 1000; ; $balance = $balance * $yearPercent) {

    $old++;
    $year++;
    if ($balance > 1000000) {
    	echo "Прошло {$year} лет. Баланс на счету достиг {$balance} рублей, возраст вкладчика - {$old} лет, надеюсь, еще не помер.\n";
    	break;
    }

}

 ?>
