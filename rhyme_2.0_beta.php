<?php
/**
 * Created by PhpStorm.
 * User: kanaris
 * Date: 29.02.2016
 * Time: 15:04
 */

error_reporting(-1);

$word1 = ['��������', '�������', '��������', '���������'];
$word2 = ['����', '���', '����', '����', '���', '���', '����'];
$word3 = ['�������������', '�������������', '������ �������', '����� ������', '������� ������', '������ ����', '������ ����', '����� ������', '����� ��������'];
$word4 = ['�������', '�������', '��������', '��������', '��������', '�������', '������', '��������', '�������'];
$word5 = ['���������', '�������������', '����������', '����� �����', '����� ������', '������� ����'];

$poem = '';

for ($i = 1; $i <= 3; $i++) {
    if($i < 3) {
        $random1 = mt_rand(0, count($word1) - 1);
        $randomWord1 = $word1[$random1];
        $random2 = mt_rand(0, count($word2) - 1);
        $randomWord2 = $word2[$random2];
        $random3 = mt_rand(0, count($word3) - 1);
        $randomWord3 = $word3[$random3];
        echo "{$randomWord1} {$randomWord2} {$randomWord3}\n";
    } else {
        $random4 = mt_rand(0, count($word4) - 1);
        $randomWord4 = $word4[$random4];
        $random5 = mt_rand(0, count($word2) - 1);
        $randomWord5 = $word5[$random5];
        echo "� {$randomWord4} {$randomWord5}";
    }

}
?>