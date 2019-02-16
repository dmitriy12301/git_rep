<?php


// считываем строки из файла и пишем первую строку 2 раза и вторую строу 2 раза
// строку first записываем с заглавных букв
$file1 = fopen('/home/oem/Рабочий стол/123/readonly.txt', 'r');
$line1 = fgets($file1);
$line2 = fgets($file1);
$file1 = fopen('/home/oem/Рабочий стол/123/readonly1.txt', 'w+');

$test2 = fwrite($file1,$line1);
$test2 = fwrite($file1,$line1."\n");
$test2 = fwrite($file1,strtoupper($line1));
$test2 = fwrite($file1,$line2);


/*Добавте в массив еще одну функцию, которая будет увеличивать зарплату на 50. Пользоваться нужно будет так:
$person['promote']($person);//увеличит зарплату, она станет 550
echo $person['salary_uah']($person);//выводит 15400
 * от 26 января
 */

$person = [
    'name' => 'Vasil',
    'promote' => function(&$growth) {

        $growth['salary'] += 50;
        return $growth['salary'];
    },
    'salary' => 500,
    'currency' => 'USD',
    'salary_uah' => function($subject) {
        if ($subject['currency'] == 'USD') {
            return $subject['salary'] * 28;
        } else if ($subject['currency'] == 'EUR') {
            return $subject['salary'] * 30;
        }
    }
];
$person['promote']($person);
echo $person['salary_uah']($person);


// задачка на тернарный оператор
echo "Для подтверждения покупки алкоголя введите ваш возраст!\n";
$handle = fopen ("php://stdin","r");
$age = fgets($handle);
echo ($age<18)? "Вы можете покупать пиво":"Прийдите, когда станете старше 18";







//задание 1.1  от 26 января.
// $arr = [1,2,3,4,3,2] и индекс $idx = 1
function climingMountain($arr, $idx){
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


//лабиринт №4 от 26 января

$arr = [
    [0,0,1,0],
    [1,0,0,0],
    [1,1,1,0],
    [1,1,1,0]
];

for ($i = 0; $i < count($arr); $i++) {


    for ($j = 0; $j < count($arr[$i]); $j++) {
        if($arr[$i][$j]==0){
            print_r($i.' '.$j . '||');
        }
        if(($arr[$i][$j]==0)&&($arr[$i+1][$j]==0)&&($i+1!=count($arr[$i]))){
            $i++;print_r($i.' '.$j . '||');
        }
        }
}


// задача 1.2 от 26 января
$arr1 = [1,2,3,4,3,2];
$idx = 1;

print_r ($b);
for ($i = $idx; $i < count($arr1); $i++) {
    $previousElement = $arr1[$i];
    $j = $i + 1;
    $nextElement = $arr1[$j];
    //$b=$arr1[$idx-1];
    if($previousElement < $nextElement) {
        $a = $previousElement;

        print_r( $a);
        //   $res=[$b,$a];
    }
}
