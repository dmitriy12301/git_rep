<?php
// Придумать и написать любой пример использования if-elseif-else

echo "Введите число!\n";
$handle = fopen ("php://stdin","r");
$a = fgets($handle);

$a = -1;
if($a > 0){
    echo 'Число больше нуля';
}
elseif ($a < 0){
    echo 'Число меньше нуля';
}
elseif ($a == 0){
    echo 'Число равно нулю';


}

// Переписать скрипт оператора if->elseif->else так, чтобы использовалась
// конструкция switch->case->break
switch($number){
    case ($a>0): echo 'число больше нуля'; break;
    case ($a<0): echo 'число меньше нуля'; break;
    case ($a==0): echo 'число равно нулю'; break;
}


// Решить задачу fizz-buzz

$handle = fopen ("php://stdin","r");
$a = fgets($handle);
$b = fgets($handle);
$c = fgets($handle);

$i = 1;
for ($i>=1; $i<$c; $i++) {
    if ($i % $a == 0 && $i % $b ==0){
        echo"FB ";}
    elseif($i % $a ==0 ) {
        print ("F ");
    }
    elseif ($i % $b ==0) {
        print("B ");
    }

    else {
        print ("$i ");
    }



}
