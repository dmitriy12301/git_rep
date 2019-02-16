<?php

$arr = [1.2,3.5,4.6,5,7,3,5,6];

//echo array_sum($arr);
function sum_array($arr)
{
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }

    echo $sum;
}
sum_array($arr);


$number =-5;
function element($number)
{
    echo ($number >= 0) ? "Число больше нуля, либо равно" : "Число меньше нуля";

}
element(-5);



$n = "123";
function number_sum($n)
{

    for ($i = 0; $i < strlen($n); $i++) {
        $arr[] = $n[$i];
    }

echo array_sum($arr);

}

number_sum("123");



function number_sum1($num)
{
//    $number = $num;
    $array = [];

      while ($num > 0) {
          $array[] = $num % 10;
          $num = intval($num / 10);
      }
      $array = array_reverse($array);


      $sum = array_sum($array);

   return($sum);
}



echo number_sum1(18);



$number =90;
$arr123 =['one','two','three','four','five','six','seven','eight','nine','ten'];
$string = ' ';
for($i=1; $i <= $number; $i++) {
    $string = $string.$arr123[$i-1].' ';

}
print_r ($string);

// diamond   делал не сам, нагуглил. потом долго в нем разбирался.
function cristall($var){

$n = ($var + 1) / 2;
$m = 0;
 for ($i = 1; $i <= $var; $i++) {
$i <= $n ? $m++ : $m--;
 for ($j = 1; $j <= $var; $j++) {
      if (($j >= $n + 1 - $m) && ($j <= $n - 1 + $m)) {

echo '*';
} else {
echo '1';
}
}
echo "\n";
}
}
cristall(9);




//количество этажей
$n = 9;
// количество квартр на этаже
$p = 4;
// количество подъездов
$v = 3;
// номер квартиры
$number_of_flat= 145;
$a = $number_of_flat / $p;

// на каком этаже находится ваша квартира
if($number_of_flat <= $n*$p) {
    if (is_int($a)) {
        echo 'Подъезд №1'.'Этаж №'.$a;
    }
    if (is_double($a)) {
        $b = (int)$a;
        ++$b;
        echo 'Подъезд №1'.'Этаж №'.$b;
    }
}
elseif ($number_of_flat > $n*$p){
  $front_door_num = (int)(($number_of_flat-1)/($n*$p));
  $front_door_num +=1;
  $floor1 = (($number_of_flat-1)%($n*$p));
$floor = (int)($floor1/$p);
$floor +=1;
echo 'Подъезд №'.$front_door_num.', Этаж №'.$floor;
}
