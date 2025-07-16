<?php
set_time_limit(1);
$ary = range(1,30);
// print_r($ary);die;
// $ary = [3,1,2];//
// $ary = range(1,30);
shuffle($ary);
// $len = count($ary);

// $idx = 0;
heap_sort($ary);
// $ary = heapSort($ary);
print_r($ary);

function bheap(&$ary , $root , $len){
    $max = $root;
    $left = $root * 2 + 1;
    $right = $root * 2 + 2;
    if($left < $len && $ary[$left] > $ary[$max]){
        $max = $left;
    }
    if($right < $len && $ary[$right] > $ary[$max]){
        $max = $right;
    }
    if($max != $root){
        swap($ary , $max , $root);
        bheap($ary , $max , $len);
    }
}

function swap(&$ary , $a , $b){
    $tmp     = $ary[$a];
    $ary[$a] = $ary[$b];
    $ary[$b] = $tmp;
}

function heap_sort(&$ary){
    $len = count($ary);
    for($i = floor($len/2) ; $i >= 0 ; $i--){
        bheap($ary , $i , $len);
    }

    $i = $len - 1;
    while($i > 0){
        swap($ary , 0 , $i);
        bheap($ary , 0 , --$i);
    }
}