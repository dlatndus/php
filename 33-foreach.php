<?php

$memberList = ['미우', '유나', '민후', '해윤'];

foreach($memberList as $ml){
    echo $ml;
    echo'<br>';
}

echo'<br>';

$memb[0] = ['name' => '미우', 'id'=>'miu'];
$memb[1] = ['name' => 'ㅁㄴ', 'id'=>'mn'];
$memb[2] = ['name' => 'ㄷㄹ', 'id'=>'dr'];

foreach($memb as $ml){
    echo "이름 : ".$ml['name']."<br>";
    echo "아이디 : ".$ml["id"]."<br>";
}

echo'<br>';

$memb2 = ['name' => '미우', 'id'=>'miu'];

foreach($memb2 as $i => $v){
    echo "인덱스 {$i}의 값 {$v}"."<br>";
}

echo'<br>';


$memb3[0] = ['name' => '미우', 'id'=>'miu'];
$memb3[1] = ['name' => 'ㅁㄴ', 'id'=>'mn'];
$memb3[2] = ['name' => 'ㄷㄹ', 'id'=>'dr'];

foreach($memb3 as $i => $v){
    foreach($v as $i2 => $v2){
        if($i2 == 'name')
            echo "{$v2}님의 아이디는 : ";
        if($i2 == 'id')
            echo "{$v2}입니다.";
    }
    echo'<br>';
}

?>


