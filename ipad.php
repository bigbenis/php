<?php

error_reporting(-1);

/*у анона кредит на 40к и на выбор три банка: два с комиссией и процентами, а третий предлагает заплатить за открытие счета один раз и потом на общую сумму будет идти процент. Надо найти выгоднейший банк, при условии, что анон в месяц может платить не более 5к */
function getPayment($sum, $percent, $service, $account, $monthlyPayment)
{
    $sum = $account + $sum; //на случай, если у банка есть платное открытие счета
    $totalyPayment = 0;//всего выплачено аноном
    while ($sum > 0) { //крутить лавеху будем, пока сумма не выплачена
        $sum = $sum * $percent + $service - $monthlyPayment; //ввести переменную для накрутки банка мне посоветовал анон

        $totalyPayment += $monthlyPayment; //анон платит каждый месяц n сумму, которая растет с каждой итерацией
        if ($sum * $percent + $service < $monthlyPayment) { //чтобы не вычитать 20р, когда долг составляет рублей 15, поставил условие
            $monthlyPayment = $sum * $percent + $service; //которое вроде как должно работать и уберегать от переплаты
        }

    }
    return $totalyPayment; //вернул выплату анона
}


$creditSum = 39999;
$payout = 5000;
$homoCreditTotal = getPayment($creditSum, 1.04, 500, 0, $payout);
$softCreditTotal = getPayment($creditSum, 1.03, 1000, 0, $payout);
$strawberryCreditTotal = getPayment($creditSum, 1.02, 0, 7777, $payout);

echo "homoCredit: {$homoCreditTotal} руб.\n";
echo "softbank: {$softCreditTotal} руб.\n";
echo "strawberryBank: {$strawberryCreditTotal} руб.\n";