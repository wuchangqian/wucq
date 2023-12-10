<?php
$ary = [];

foreach(range(1 ,3) as $v){
  $ary[] = [
    'name' => 'name'.$v,
    'phone' => '1345678000'.$v,
    'email' => 'email_'.$v."@gmail.com",
  ];
}
echo json_encode($ary);