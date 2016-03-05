<?php

function getBalanceInFuture($sum, $percent, $service, $account, $monthlyPayment)
{
    $sum = $account + $sum; //�� ������, ���� � ����� ���� ������� �������� �����
    $totalyPayment = 0;//����� ��������� ������
    while ($sum > 0) { //������� ������ �����, ���� ����� �� ���������
        $sum = $sum * $percent + $service - $monthlyPayment; //������ ���������� ��� �������� ����� ��� ����������� ����

        $totalyPayment += $monthlyPayment; //���� ������ ������ ����� n �����, ������� ������ � ������ ���������
        if ($sum * $percent + $service < $monthlyPayment) { //����� �� �������� 20�, ����� ���� ���������� ������ 15, �������� �������
            $monthlyPayment = $sum * $percent + $service; //������� ����� ��� ������ �������� � ��������� �� ���������
        }

    } return $totalyPayment; //������ ������� �����
}

$balance = getBalanceInFuture(39999, 1.04, 500, 0, 5000);
$balance1 = getBalanceInFuture(39999, 1.03, 1000, 0, 5000);
$balance2 = getBalanceInFuture(39999, 1.02, 0, 7777, 5000);
echo "��������� {$balance} ���.\n";
echo "��������� {$balance1} ���.\n";
echo "��������� {$balance2} ���.\n";