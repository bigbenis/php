<?php

error_reporting(-1);

$creditBalance = 1000;
/* ���� ����� ����� ������ */
$percent = 1.05;
/* ���� ��������� 3% � ����� �� ����� */
$servicePayment = 10;
/* � ����� 1000 ������ � ����� �������� �� ������������ ����� */
$monthlyPayment = 200;
/* ���� ������ 5000 � � �����, ��� ���, ��� ��� ���� ���� �� �������� */
$paymentTotal = 0;
/* ������� ����� ����� ����� ���� */

/* ��������� ������� 20 ��� �� 20 ������� ������ */
for ($month = 1; $month <= 20; $month++) {

    $creditBalance = ($creditBalance * $percent) + $servicePayment - $monthlyPayment;
    $paymentTotal = $paymentTotal + $monthlyPayment;
    echo "{$month} ����� ������: ���� = {$creditBalance} ���, ��������� ����� {$paymentTotal} ���. \n";

    /* ���� ������ ������������� � ������ ������� */
    if ($creditBalance <= 0) {
        echo "��!\n";
        break;

    } elseif ($creditBalance * $percent + $servicePayment < $monthlyPayment) {

        $monthlyPayment = $creditBalance * $percent + $servicePayment;


    }

}


?>
