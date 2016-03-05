<?php

error_reporting(-1);

/*� ����� ������ �� 40� � �� ����� ��� �����: ��� � ��������� � ����������, � ������ ���������� ��������� �� �������� ����� ���� ��� � ����� �� ����� ����� ����� ���� �������. ���� ����� ����������� ����, ��� �������, ��� ���� � ����� ����� ������� �� ����� 5� */
function getPayment($sum, $percent, $service, $account, $monthlyPayment)
{
    $sum = $account + $sum; //�� ������, ���� � ����� ���� ������� �������� �����
    $totalyPayment = 0;//����� ��������� ������
    while ($sum > 0) { //������� ������ �����, ���� ����� �� ���������
        $sum = $sum * $percent + $service - $monthlyPayment; //������ ���������� ��� �������� ����� ��� ����������� ����

        $totalyPayment += $monthlyPayment; //���� ������ ������ ����� n �����, ������� ������ � ������ ���������
        if ($sum * $percent + $service < $monthlyPayment) { //����� �� �������� 20�, ����� ���� ���������� ������ 15, �������� �������
            $monthlyPayment = $sum * $percent + $service; //������� ����� ��� ������ �������� � ��������� �� ���������
        }

    }
    return $totalyPayment; //������ ������� �����
}


$creditSum = 39999;
$payout = 5000;
$homoCreditTotal = getPayment($creditSum, 1.04, 500, 0, $payout);
$softCreditTotal = getPayment($creditSum, 1.03, 1000, 0, $payout);
$strawberryCreditTotal = getPayment($creditSum, 1.02, 0, 7777, $payout);

echo "homoCredit: {$homoCreditTotal} ���.\n";
echo "softbank: {$softCreditTotal} ���.\n";
echo "strawberryBank: {$strawberryCreditTotal} ���.\n";