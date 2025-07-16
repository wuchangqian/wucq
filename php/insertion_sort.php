<?php
$ary = range(1,30);
shuffle($ary);
$ary = insertion_sort($ary);

print_r($ary);

// swap : 1477245 compare : 5623
// swap : 2248561 compare : 2999

/***************************
 * 插入排序
 * 从第二个元素开始，将后面的元素逐个，按索引值从大到小进行比较
 * 如果比较
 ****************************/
function insertion_sort($ary){
    $len = count($ary);
    for($i = 1; $i < $len ; $i++){
        $cur = $ary[$i];
        $j = $i-1;
        while($j >= 0 && $cur < $ary[$j]){
            $ary[$j+1] = $ary[$j];
            $j--;
        }
        $ary[$j+1] = $cur;
    }
    return $ary;
}



/**
 * 
 * 
 * $len = count($ary);
    for($i = 1 ; $i < $len ; $i++){
        $j = $i - 1;
        $tmp = $ary[$i];
        
        while($j >= 0 && $tmp < $ary[$j]){
        
            $ary[$j+1] = $ary[$j];
            $j--;
        }
        $ary[$j+1] = $tmp;
    }
    return $ary;


    
 * $len = count($ary);
    for($i = 1 ; $i < $len ; $i++){
        $cur = $ary[$i];
        $j = $i - 1;
        while($j >= 0 && $cur < $ary[$j]){
            $ary[$j+1] = $ary[$j];
            $j--;
        }
        $ary[$j+1] = $cur;
    }
    */