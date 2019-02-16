<?php

$file = fopen('/home/oem/Рабочий стол/123/fizz-buzz.txt','r');
$a = fgets($file);
$b = fgets($file);
$c = fgets($file);
//fclose ($file);
function fizz_b($a, $b, $c){
    $file3 = fopen ("/home/oem/Рабочий стол/123/file3.txt'","w+");


    for ($i = 1; $i < $c; $i++) {
        if ($i % $a == 0 && $i % $b == 0) {
            fwrite($file3, "FB ");
        } elseif ($i % $a == 0) {
            fwrite($file3, "F ");
        } elseif ($i % $b == 0) {
            fwrite($file3, "B ");
        } else {
            fwrite($file3, "$i ");
        }


    }
    fclose($file3);
}


fizz_b($a,$b,$c);


// домашние задания от 16 января
function foo($name)
{
    echo "Какой чай вы хотите?</br>";
    echo "я хочу $name чай";


}
$tea = "зеленый";
foo($tea);

unction getAnswer($question){

$res = rand(0, 1);
if ($res == 1) {
    echo "да";
} elseif ($res == 0) {
    echo "нет";
}
}
getAnswer();
function YN($qyestion)
{
    echo $qyestion.'?';
    $res1 = rand(0, 1);
    switch ($res1) {
        case 0:
            echo "да";
            break;
        case 1:
            echo "нет";
            break;

    }
}
$qyestion = "Вы думаете?";
YN($qyestion);
echo "<br>";

function transformNumber($number)
{
    switch ($number) {
        case ($number < 3):
            echo "$number";
            break;

        case ($number >= 3 && $number <= 15):
            echo "3";
            break;

        case ($number > 15):
            echo "$number";
            break;

    }
}

