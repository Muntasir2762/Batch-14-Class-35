<?php

function sum($x, $y){

    $result = $x+$y;

    return $result;
}

function multiply($number){
    $result = sum(300, 500); //800

    $multiply = $result*$number;

    return $multiply;
}

function division($x, $y){

    $result = $x/$y;

    return $result;
}

// echo sum(30, 50). '<br>';

// $result2 = sum(100, 200)+20;
// echo $result2.'<br>';

// echo sum(40, 50);

// echo multiply(100); //80000

echo division(sum(100, 200), 50);

?>