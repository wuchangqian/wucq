<?php
set_time_limit(1);
$s = 'AAAAB3NzaC1yc2EAAAADAQABAAABAQDNhY5c54olduR3gt7WKPxUggeLGS+h6uS5oTs++7bg9w3DG9rSx1bwWiEIB2V8qx+9wJUSx7HYWG19pcESTcXZx5N5BAie1Dt8huDwC0pHbzh+wl9e+2Vg6sI2SQBcXjtrzRkygLn5SqAmnr4q+If8B7ohpfe1efu5QGD1kbzYe8Imi6qVEYbfXj8iRsyfCCjHgbijIufl3Q6sJoU1mgZXY2Aah0MyZF0hQwfOcx2o9Q+G/QES0ohf45iW7LXXdTa1Q3bpyl3IMH5EJiHhDLaqc98m/clQ+zrtup+eMB/475TShIouWoi5C9aSPifHXPXUWTwd2thnX24OpOZ+lNKd';

echo base64_decode($s);
die;
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