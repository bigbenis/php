<?php

function getBalanceInFuture($sum, $percent, $service, $account, $monthlyPayment)
{
    $sum = $account + $sum; //на случай, если у банка есть платное открытие счета
    $totalyPayment = 0;//всего выплачено аноном
    while ($sum > 0) { //крутить лавеху будем, пока сумма не выплачена
        $sum = $sum * $percent + $service - $monthlyPayment; //ввести переменную для накрутки банка мне посоветовал анон

        $totalyPayment += $monthlyPayment; //анон платит каждый месяц n сумму, которая растет с каждой итерацией
        if ($sum * $percent + $service < $monthlyPayment) { //чтобы не вычитать 20р, когда долг составляет рублей 15, поставил условие
            $monthlyPayment = $sum * $percent + $service; //которое вроде как должно работать и уберегать от переплаты
        }

    } return $totalyPayment; //вернул выплату анона
}

$balance = getBalanceInFuture(39999, 1.04, 500, 0, 5000);
$balance1 = getBalanceInFuture(39999, 1.03, 1000, 0, 5000);
$balance2 = getBalanceInFuture(39999, 1.02, 0, 7777, 5000);
echo "Выплачено {$balance} руб.\n";
echo "Выплачено {$balance1} руб.\n";
echo "Выплачено {$balance2} руб.\n";