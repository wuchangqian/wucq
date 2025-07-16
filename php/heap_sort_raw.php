<?php
set_time_limit(1);
$ary = range(1,30);
shuffle($ary);
$ary = heapSort($ary);
print_r($ary);
function buildMaxHeap(&$arr , $len){
    for ($i = floor($len/2); $i >= 0; $i--) {
        echo "heapify: i = $i len = $len \n";
        heapify($arr, $i , $len);
    }
}

function heapify(&$arr, $root , $len){
    $left  = 2 * $root + 1;
    $right = 2 * $root + 2;
    $max = $root;
    if ($left < $len && $arr[$left] > $arr[$max]) {
        $max = $left;
    }
    echo "left = $left right = $right len=$len root = $root \n";
    if ($right < $len && $arr[$right] > $arr[$max]) {
        $max = $right;
    }
    if ($max != $root) {
        swap($arr, $root, $max);
        heapify($arr, $max , $len);
    }
}

function swap(&$arr, $i, $j){
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
}

function heapSort($arr) {
    //global $len;
    $len = count($arr);
    buildMaxHeap($arr , $len);
    for($i = count($arr) - 1; $i > 0; $i--) {
        echo "----------------------finished: $i \n";
        swap($arr, 0, $i);
        $len--;
        heapify($arr, 0 , $len);
    }
    return $arr;
}