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

$random1 = mt_rand(0, count($word1) - 1);
$random2 = mt_rand(0, count($word2) - 1);
$random3 = mt_rand(0, count($word3) - 1);
$random4 = mt_rand(0, count($word1) - 1);
$random5 = mt_rand(0, count($word2) - 1);
$random6 = mt_rand(0, count($word3) - 1);
$random7 = mt_rand(0, count($word4) - 1);
$random8 = mt_rand(0, count($word5) - 1);

$randomWord1 = $word1[$random1];
$randomWord2 = $word2[$random2];
$randomWord3 = $word3[$random3];
$randomWord4 = $word1[$random4];
$randomWord5 = $word2[$random5];
$randomWord6 = $word3[$random6];
$randomWord7 = $word4[$random7];
$randomWord8 = $word5[$random8];

$stringText1 = $randomWord1 . " " . $randomWord2 . " " . $randomWord3 . ",";
$stringText2 = $randomWord4 . " " . $randomWord5 . " " . $randomWord6 . ",";
$stringText3 = $randomWord7 . " " . $randomWord8;

echo "{$stringText1}\n {$stringText2}\n � {$stringText3}";

?>