<?php
$ary = range(1,50);

$findidx= binarySearch($ary , 2);

echo date("")

echo $findidx;

function binarySearch($ary , $needle){
    $len = count($ary);
    $left   = 0;
    $right  = $len - 1;
    
    while($left <= $right){
        $mid  = $left + floor(($right-$left)/2);
        #echo "[left = $left  right = $right ] mid = $mid  \n";
        if($ary[$mid] == $needle){
            return $mid;
        }else if($ary[$mid] > $needle){
            $right = $mid - 1;
        }else if($ary[$mid] < $needle){
            $left = $mid + 1;
        }
    }
    return -1;
}


__halt_compiler();


2025年1-4月德伦平台为云南省提供的网络创业培训教学平台合作机构21家，服务学员班112期，培训学员3227人[ 存在部分机构的测试班级在系统内部，作为机构新老师的练习，故培训总人数与系统人数存在差异。]，合格3097人[ 部分班级理论考试采用的是线下考试，实际为合格，系统里面没有理论考试判为不合格。故实际合格人数和系统显示合格人数不符。]，合格率95.97%；其中网创（电商版）培训人数为xx人，占培训总人数的xx%；网创（直播）培训人数为xx人，占培训总人数的xx%。培训地州xx个


/**
 * 二分查找法
 */
function binarySearch($ary , $needle){
    $len = count($ary);
    $left = 0;
    $right = $len - 1;
    while($left <= $right){
        $mid = $left + floor(($right-$left)/2);
        echo "[$left , $right] mid=$mid\n";
        if($ary[$mid] == $needle){
            return $mid;
        }else if($ary[$mid] < $needle){
            $left = $mid + 1;
        }else if($ary[$mid] > $needle){
            $right = $mid -1;
        }
    }
    return -1;
}