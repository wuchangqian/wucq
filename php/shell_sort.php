<?php
$ary = range(0,39);


die;
shuffle($ary);
// 示例用法
$sortedArray = shellSort($ary);
echo "排序后数组: " . implode(",", $sortedArray) . "\n";
#通过动画可视化数据结构和算法

function shellSort($ary){
    $len = count($ary);
    for($gap = floor($len/2) ; $gap >= 1 ; $gap=floor($gap/2)){
        for($i = $gap ; $i < $len ; $i++){
            $cur = $ary[$i];
            $j = $i - $gap;
            while($j >= 0 && $cur < $ary[$j]){
                $ary[$j+$gap] = $ary[$j];
                $j -= $gap;
            }
            $ary[$j+$gap] = $cur;
        }
    }

    return $ary;
}

__halt_compiler();



function shellSort($ary){
    $len = count($ary);
    for($gap=floor($len/2) ; $gap >= 1 ; $gap=floor($gap/2)){
        for($i = $gap ; $i < $len ; $i++){
            $cur = $ary[$i];
            $j   = $i - $gap;
            while($j >= 0 && $cur < $ary[$j]){
                $ary[$j+$gap] = $ary[$j];
                $j -= $gap;
            }
            $ary[$j+$gap] = $cur;
        }
    }
    return $ary;
}



__halt_compiler();
function shellSort($ary){
    $len = count($ary);
    for($gap = floor($len /2) ; $gap >= 1 ; $gap = floor($gap/2)){
        for($i = $gap ; $i < $len ; $i++){
            $cur = $ary[$i];
            $j = $i - $gap;
            while($j >= 0 && $cur < $ary[$j]){
                $ary[$j+$gap] = $ary[$j];
                $j -= $gap;
            }
            $ary[$j+$gap] = $cur;
        }
    }
    return $ary; 
}















/**
 * 希尔排序算法实现
 * 
 * @param array $arr 待排序的数组
 * @return array 排序后的数组
 */
function shellSort1(array $arr): array {
    $n = count($arr);
    // 初始增量为数组长度的一半，逐步缩小增量
    for ($gap = intval($n / 2); $gap > 0; $gap = intval($gap / 2)) {
        // 对每个分组进行插入排序
        for ($i = $gap; $i < $n; $i++) {
            $temp = $arr[$i];
            $j = $i-$gap;
            // 插入排序的核心逻辑
            while ($j >= 0 && $arr[$j] > $temp) {
                $arr[$j+$gap] = $arr[$j];
                $j -= $gap;
            }
            $arr[$j+$gap] = $temp;
        }
    }
    return $arr;
}

