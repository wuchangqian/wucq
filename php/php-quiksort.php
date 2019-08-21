<?php

function get_ary($size){
    $size = abs(intval($size));
    $ary = array();

    foreach(range(1 , $size) as $v){
        $ary[] = rand(0 , 2000);
    }
    return $ary;
}
function qs($ary){
    $s = count($ary);
    if($s <= 1 ){
        return $ary;
    }

    $pivot = $ary[0];
    $l = array();
    $r = array();
    for($i = 1 ; $i < $s ; $i++){

        if($pivot > $ary[$i]){
            $l[] = $ary[$i];
        }else{
            $r[] = $ary[$i];
        }
    }

    return array_merge(qs($l) , array($pivot) , qs($r));
}

function dump_ary($s){
    $old = $s[0];
    foreach ($s as $key => $value) {
        $sb = $value - $old;
        if($sb >= 0){
            echo str_pad("[$sb]=" ,  6 , ' ' );
        }else{
            echo " [*** $sb ***]";
        }
        echo str_pad("$value" ,  5 , ' ' );
        $old = $value;
    }
    echo PHP_EOL;
}

foreach(range(1,10) as $v){
    dump_ary(qs(get_ary(rand(5,8))));
}
