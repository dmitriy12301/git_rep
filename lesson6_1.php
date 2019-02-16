<?php

gug
fuyu
uygig
ufjuifkkkkk
//задание 1.1
function climing_mountain($arr, $idx){
    $res_idx = $arr[$idx];
    $res_right = $arr[$idx+1];
    $res_left = $arr[$idx-1];

       if($res_idx>$res_left && $res_idx<$res_right){
        return (+1);
    }
       if(($res_idx<$res_left && $res_idx>$res_right) || ($res_idx<$res_right && $res_idx<$res_left)){
        return (-1);
    }
       else{ return(0);}

}

$a= climing_mountin($arr,1);
echo $a;

//задание 1.2

$arr = [1,2,3,4,3,2];
$idx=1;

/*
// условие выполняется до тех пор, пока каждый элемент меньше последующего
while($arr[$idx]<$arr[$idx+$j] && $arr[$idx+$j]<$arr[$idx+$j+$j]){
    for($j = $arr[$idx]; $j<count($arr)-1; $j++){

$arr = $newarray;


    }
print_r ($newarray[$j]);
}

echo "<pre>";
//print_r ($arr[$idx]);
echo "</pre>";

*/



