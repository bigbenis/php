<?php

error_reporting(-1);

$anonDice1 = mt_rand(1,6);
$anonDice2 = mt_rand(1,6);

$compDice1 = mt_rand(1,6);
$compDice2 = mt_rand(1,6);

echo "У анона выпало {$anonDice1} и {$anonDice2}\nУ компьютера выпало {$compDice1} и {$compDice2}\n";

$anonSum = ($anonDice1 + $anonDice2);
$compSum = ($compDice1 + $compDice2);

if (($anonDice1 == $anonDice2) && ($compDice1 == $compDice2)) {
  echo "Два дабла - тебя ждет большая удача!";
  exit();
} elseif ($anonSum > $compSum) {
  echo "Анон вин!";
  exit();
} elseif ($anonSum < $compSum) {
  echo "Пека вин!";
  exit();
} else {
  echo "Ничья!";
  exit();
}


 ?>
