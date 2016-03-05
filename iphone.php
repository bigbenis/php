<?php

error_reporting(-1);

$creditBalance = 1000;
/* ƒолг анона перед банком */
$percent = 1.05;
/* Ѕанк начисл€ет 3% в мес€ц от суммы */
$servicePayment = 10;
/* ј также 1000 рублей в мес€ц комиссии за обслуживание счета */
$monthlyPayment = 200;
/* јнон платит 5000 р в мес€ц, это все, что ему дает мама на завтраки */
$paymentTotal = 0;
/* —колько всего отдал банку анон */

/* ѕосчитаем расходы 20 раз на 20 мес€цев вперед */
for ($month = 1; $month <= 20; $month++) {

    $creditBalance = ($creditBalance * $percent) + $servicePayment - $monthlyPayment;
    $paymentTotal = $paymentTotal + $monthlyPayment;
    echo "{$month} мес€ц спуст€: долг = {$creditBalance} руб, выплачено всего {$paymentTotal} руб. \n";

    /* ≈сли баланс отрицательный Ч хватит считать */
    if ($creditBalance <= 0) {
        echo "¬сЄ!\n";
        break;

    } elseif ($creditBalance * $percent + $servicePayment < $monthlyPayment) {

        $monthlyPayment = $creditBalance * $percent + $servicePayment;


    }

}


?>
