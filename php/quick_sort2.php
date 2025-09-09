<?php


$ary = range(1,20);

shuffle($ary);
print_r($ary);

$ary = quick_sort($ary);
print_r($ary);
function quick_sort($arr){
    if (count($arr) <= 1)
        return $arr;
    $middle = $arr[0];
    $leftArray = array();
    $rightArray = array();

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $middle)
            $rightArray[] = $arr[$i];
        else
            $leftArray[] = $arr[$i];
    }
    $leftArray = quick_sort($leftArray);
    $leftArray[] = $middle;

    $rightArray = quick_sort($rightArray);
    return array_merge($leftArray, $rightArray);
}


__halt_compiler();
39000
0011100100 0000000000

128+64+32+4
192+36
