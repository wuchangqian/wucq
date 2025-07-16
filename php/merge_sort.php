<?php

error_reporting(E_ERROR);

$file_contents = file_get_contents('/Users/wcq/Downloads/baidu.txt');


print_r($ary);die;

__halt_compiler();
die;

echo password_hash('wcq537', PASSWORD_DEFAULT);die;

$a = '{"xmsbs":{"id":"xmsbs","filename":"\u9879\u76ee\u7533\u62a5\u4e66","require":"1","name":"\u9879\u76ee\u7533\u62a5\u4e66.docx","path":"https:\/\/chuangyeds.oss-cn-shanghai.aliyuncs.com\/actt\/upload\/new\/210385\/210385_TF6JyZ8W8SGatR22AStwQs4m3xWTKw4K.docx"},"sjfa":{"id":"sjfa","filename":"\u8bbe\u8ba1\u65b9\u6848","require":"0","name":"","path":""},"syjhs":{"id":"syjhs","filename":"\u5546\u4e1a\u8ba1\u5212\u4e66","require":"0","name":"","path":""},"qt":{"id":"qt","filename":"\u5176\u5b83","require":"0","name":"","path":""}}';

print_r(json_decode($a));



// https://dlmlh.oss-cn-shanghai.aliyuncs.com/banner/nbchuangye/2cSeDTceQHAZc8s.png
die;

if (extension_loaded('inotify')) {
    // 扩展可用 优先使用扩展进行处理
    //$this->registerInotifyEvent();
    echo "server hot reload start : use inotify\n";
} else {
    echo 33;
}
die;

1、南圩片区总体规划设计与运营策划
2、中部运动基地方案设计与运营策划
3、东部农林片区规划设计与运营策划
4、西部农林片区规划设计与运营策划
5、水岸片区规划设计与运营策划
6、体育青创基地规划设计与运营策划
7、体育主题研学运营策划
8、军事主题研学运营策划
9、石淙休闲运动聚落品牌设计与推广
10、大石淙花海片区总体运营方案

function a(...$ary):int{
    $sum = 0;
    foreach($ary as $v){
        $sum += $v;
        echo "$v \n";
    }
    return $sum;
}
$c = range(1,9);

$t = a(1,3,5,6,9);

echo "\n---before go \n";
go(function(){
    Co::sleep(1);
    echo 'in go';
});
echo "\n---after go \n";
// echo $t;
__halt_compiler();
$ary = range(1,30);
set_time_limit(1);


shuffle($ary);
merge_sort($ary , 0 , count($ary) - 1);
echo implode(',',$ary);


ls59582  老师
jg014 机构

function merge_sort(&$ary , $left , $right){
    if($left == $right){
        return;
    }else{
        $mid = $left + floor(($right-$left) /2 );
        merge_sort($ary , $left , $mid);
        merge_sort($ary , $mid+1 , $right);
        merge($ary , $left , $mid , $right);
    }
}

function merge(&$ary , $left , $mid , $right ){
    $tmp_ary = [];
    $i = $left ;
    $j = $mid + 1;
    $k = 0;
    while($i <= $mid && $j <= $right){
        if($ary[$i] > $ary[$j]){
            $tmp_ary[$k++] = $ary[$j++];
        }else{
            $tmp_ary[$k++] = $ary[$i++];
        }
    }

    while($i <= $mid){
        $tmp_ary[$k++] = $ary[$i++];
    }

    while($j <= $right){
        $tmp_ary[$k++] = $ary[$j++];
    }

    for($k = 0 , $i = $left ; $i <= $right ; $k++){
        $ary[$i++] = $tmp_ary[$k];
    }
}













__halt_compiler();

merge_sort($ary,0,count($ary)-1);
print_r($ary);

function merge_sort(&$ary , $left , $right){
    if($left == $right){
        return;
    }else{
        $mid = $left + floor(($right-$left)/2);
        echo "left = $left right = $right  mid = $mid \n";
        merge_sort($ary , $left , $mid);
        merge_sort($ary , $mid+1  , $right);
        merge($ary , $left , $mid , $right);
    }
}

function merge(&$ary , $left , $mid , $right){
    $tmp_ary = [];
    $i = $left;
    $j = $mid + 1;
    $k = 0;
    while($i <= $mid && $j <= $right){
        if($ary[$i] < $ary[$j]){
            $tmp_ary[$k++] = $ary[$i++];
        }else{
            $tmp_ary[$k++] = $ary[$j++];
        }
    }

    while($i <= $mid){
        $tmp_ary[$k++] = $ary[$i++];
    }

    while($j <= $right){
        $tmp_ary[$k++] = $ary[$j++];
    }

    for($i = $left , $k = 0 ; $i <= $right ; $i++){
        $ary[$i] = $tmp_ary[$k++]; 
    }
}







__halt_compiler();









function merge_sort(&$ary , $left , $right){
    if($left == $right){
        return;
    }else{
        $mid = $left + floor(($right - $left)/2);
        merge_sort($ary , $left  , $mid);
        merge_sort($ary , $mid+1 , $right);
        merge($ary , $left , $mid , $right);
    }
}

function merge(&$ary , $left , $mid , $right){
    $tmp_ary = [];
    $i = $left;
    $j = $mid + 1;
    $k = 0;
    while($i <= $mid && $j <= $right){
        if($ary[$i] < $ary[$j]){
            $tmp_ary[$k++] = $ary[$i++];
        }else{
            $tmp_ary[$k++] = $ary[$j++];
        }
    }

    while($i <= $mid){
        $tmp_ary[$k++] = $ary[$i++];
    }

    while($j <= $right){
        $tmp_ary[$k++] = $ary[$j++];
    }

    for($k = 0 , $i = $left ; $i <= $right ; $k++){
        $ary[$i++] = $tmp_ary[$k];
    }
}







__halt_compiler();
function merge_sort(&$ary , $left , $right){
    if($left == $right){
        return ;
    }else{
        $mid = $left + floor(($right-$left)/2);
        merge_sort($ary , $left , $mid);
        merge_sort($ary , $mid+1 , $right);
        merge($ary , $left , $mid , $right);
    }
}

function merge(&$ary , $left , $mid , $right){
    $tmp_ary = [];
    $i = $left;
    $j = $mid+1;
    $k = 0;
    while($i <= $mid && $j <= $right){
        if($ary[$i] < $ary[$j]){
            $tmp_ary[$k++] = $ary[$i++];
        }else{
            $tmp_ary[$k++] = $ary[$j++];
        }
    }

    while($i <= $mid){
        $tmp_ary[$k++] = $ary[$i++];
    }
    while($j <= $right){
        $tmp_ary[$k++] = $ary[$j++];
    }

    for($k = 0 , $i = $left ; $i <= $right ;){
        $ary[$i++] = $tmp_ary[$k++];
    }
}





__halt_compiler();












function merge_sort1(&$ary , $left , $right){
    if($left == $right){
        return;
    }else{
        $mid = $left + intval(($right-$left)/2);
        echo "left=$left mid=$mid right=$right\n";
        merge_sort1($ary , $left , $mid);
        merge_sort1($ary , $mid+1, $right);
        merge1($ary , $left , $mid , $right);
    }
}

function merge1(&$ary , $left , $mid , $right){
    $tmp_ary = [];
    $i = $left;
    $j = $mid+1;
    $k = 0;
    while($i <= $mid && $j <= $right){
        if($ary[$i] <= $ary[$j]){
            $tmp_ary[$k++] = $ary[$i++];
        }else{
            $tmp_ary[$k++] = $ary[$j++];
        }
    }
    while($i <= $mid){
        $tmp_ary[$k++] = $ary[$i++];
    }
    while($j <= $right){
        $tmp_ary[$k++] = $ary[$j++];
    }
    for($i = $left , $k=0 ; $i <= $right ; $k++){
        $ary[$i++] = $tmp_ary[$k];
    }
}
