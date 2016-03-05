<?php

$creditBalance = 40000;
/* Долг анона перед банком */
$percent = 1.03;
/* Банк начисляет 3% в месяц от суммы */
$servicePayment = 1000;
/* А также 1000 рублей в месяц комиссии за обслуживание счета */
$monthlyPayment = 5000;
/* Анон платит 5000 р в месяц, это все, что ему дает мама на завтраки */
$paymentTotal = 0;
/* Сколько всего отдал банку анон */

/* Посчитаем расходы 20 раз на 20 месяцев вперед */
for ($month = 1; $month <= 20; $month++) {

    $creditBalance = ($creditBalance * $percent) + $servicePayment - $monthlyPayment;
    $paymentTotal = $paymentTotal + $monthlyPayment;
    echo "{$month} месяц спустя: долг = {$creditBalance} руб, выплачено всего {$paymentTotal} руб. \n";

    /* Если баланс отрицательный — хватит считать */
    if ($creditBalance <= 0) {
        echo "Всё!\n";
        break;

    } elseif ($creditBalance * $percent + $servicePayment < 5000) {
        $monthlyPayment = $creditBalance * $percent + $servicePayment;

    }

}


?>
