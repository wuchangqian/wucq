<?php
$ary = range(1,30);
shuffle($ary);
$ary = bubble_sort($ary);
print_r($ary);


function bubble_sort($ary){
    $len = count($ary);
    for($i = 0 ; $i < $len - 1 ; $i++){
        $swap_flag = 0;
        for($j = 0 ; $j < $len - 1 - $i ; $j++){
            if($ary[$j] > $ary[$j+1]){
                $swap_flag = 1;
                list($ary[$j] , $ary[$j+1]) = [$ary[$j+1] , $ary[$j]];
            }
        }
        if($swap_flag == 0){
            break;
        }
    }
    return $ary;
}





__halt_compiler();

/**
 * 冒泡排序
 * 最坏情况下，时间复杂度O(n2)
 */
function bubble_sort1($ary) {
    $len = count($ary);
    for($i=0; $i < $len-1; $i++){
        $swap_flag = false;
        for($j=0; $j<$len-1-$i;$j++){
            if($ary[$j] > $ary[$j+1] ){
                $swap_flag  = true;
                $tmp        = $ary[$j];
                $ary[$j]    = $ary[$j+1];
                $ary[$j+1]  = $tmp;
            }
        }
        if(!$swap_flag){
            break;
        }
    }
    return $ary;
}

/* ******************************
$len = count($ary);
    $swap_flag = false;
    for($i = 0 ; $i < $len - 1 ; $i++) {
        $swap_flag = false;
        for($j=0 ; $j < $len - 1 - $i ; $j++) {
            if($ary[$j] > $ary[$j+1]){
                $swap_flag = true;
                $tmp       = $ary[$j];
                $ary[$j]   = $ary[$j+1];
                $ary[$j+1] = $tmp;
            }
        }
        if(!$swap_flag){
            break;
        }
    }
    return $ary;
******************************* */