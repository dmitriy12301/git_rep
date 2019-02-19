<?php

function fizzbuzz($n,&$a,&$b){
    $a=3;
    $b=5;

    return (($n % $a == 0 && $n % $b == 0) ? "fizzbuzz" :  $n);
}
function fizz($n){
    $a=3;
    return (( $n % $a === 0 ) ? "fizz" : $n );
}
function buzz($n,$b){
    $b=5;
    return (( $n % $b === 0 ) ? "buzz" : $n );
}



$fb = (array_map( "fizzbuzz",  range(0, 30)) );
$f = (array_map( "fizz",  range(0, 30)) );
$b = (array_map( "buzz",  range(0, 30)) );


function foo($arr1, $arr2,$arr3)
{
    foreach ($arr1 as $key => $val) {
        // если значение массива является числом, выполняется условие:
        if (is_int($val)) {
            //
            if (!is_int($arr2[$key])) {
                $arr1[$val] = $arr2[$val];

            }
            if (!is_int($arr3[$key])) {
                $arr1[$val] = $arr3[$val];

            }

        }
        echo "<pre>";
        print_r($arr1[$key]);
        echo "</pre>";
    }

}
$k = foo($fb, $f, $b);
