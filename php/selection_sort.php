<?php
$ary = range(1,30);

shuffle($ary);

$ary = selection_sort($ary);
print_r($ary);


function selection_sort($ary){
    $len = count($ary);
    for($i=0; $i < $len - 1; $i++){
        $min_index = $i;
        for($j = $i + 1; $j < $len ; $j++){
            if($ary[$j] < $ary[$min_index]){
                $min_index = $j;
            }
        }
        if($min_index != $i){
            $tmp = $ary[$i];
            $ary[$i] = $ary[$min_index];
            $ary[$min_index] = $tmp;
        }
    }
    return $ary;
}


__halt_compiler();

/**
 * 选择排序
 * 从第2个元素（索引值为1）开始
 * 每次都把“最小值的index”选出来,
 */
function selection_sort1($ary){
    $len = count($ary);
    for($i = 0 ; $i < $len - 1 ; $i++){
        $min_index = $i;
        for($j = $i+1 ; $j < $len ; $j++){
            if($ary[$j] < $ary[$min_index]){
                $min_index = $j;
            }
        }
        if($min_index != $i){
            $tmp = $ary[$i];
            $ary[$i] = $ary[$min_index];
            $ary[$min_index] = $tmp;
        }
    }
    return $ary;
}



/*
 $len = count($ary);
    for($i = 0; $i < $len - 1; $i++){
        $min_index = $i;
        for($j=$i+1 ; $j < $len ; $j++){
            if($ary[$j] < $ary[$min_index]){
                $min_index = $j;
            }
        }
        if($min_index != $i){
            $swap_count++;
            $tmp             = $ary[$i];
            $ary[$i]         = $ary[$min_index];
            $ary[$min_index] = $tmp;
        }
    }
    return $ary;
*/