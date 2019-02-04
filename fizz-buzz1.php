<?php

// $file = fopen('/home/oem/Рабочий стол/123/file.txt', 'w+');


function &fizz_buzz($a, $b, $c) {
    $i = 1;


    for ($i>0; $i<$c; $i++) {
        if ($i % $a == 0 && $i % $b == 0) {

            $output= 'FB ' ;
        } elseif ($i % $a == 0) {
            $output = 'F ';
        } elseif ($i % $b == 0) {
            $output= 'B ';
        } else {
           $output ="$i ";
        }

     echo $output ;

    }


}

hjkk
//fwrite($frez переменная файла .

////////
//$x = fizz_buzz3(3, 5, 85);
//echo $x;
