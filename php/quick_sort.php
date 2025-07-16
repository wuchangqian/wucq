#! /usr/bin/php
<?php
set_time_limit(2);

// $ary = [1,1,1,1,1];//
$ary = range(1,30);
shuffle($ary);

quick_sort($ary , 0 , count($ary)-1);
echo implode(',',$ary);




function quick_sort(&$ary , $left, $right){
    if($left>=$right){
        return;
    }
    $i  = $left;
    $j  = $right;
    $key= $ary[$i];
    
    while($i<$j){
        /* 从右往左找到第一个比$key小的值 */
        while($key<=$ary[$j] && $i<$j){
            --$j;
        }
        $ary[$i]=$ary[$j];
        
        /* 从左往右找到第一个比$key大的值 */
        while($key>=$ary[$i] && $i<$j){
            ++$i;
        }
        $ary[$j]=$ary[$i];
    }
    $ary[$i]=$key;
    quick_sort($ary,$left,$i-1);
    quick_sort($ary,$i+1,$right);
}

__halt_compiler();

function quick_sort1($ary){
    $len = count($ary);
    if($len <= 1){
        return $ary;
    }
    $left = [];
    $right= [];
    $flag = $ary[0];
    for($i = 1 ; $i < $len ; $i++){
        if($flag > $ary[$i]){
            $left[] = $ary[$i];
        }else{
            $right[] = $ary[$i];
        }
    }
    return array_merge(quick_sort($left) , array($flag) , quick_sort($right));
}