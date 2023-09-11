<?php
$pattern = '/^[a-z]+$/'; //영어 소문자로 시작하고 끝나며 1byte이상

$str = 'asa';

if(preg_match($pattern, $str, $matches)){
    echo "값 {$str}은 정규식 표현에 적합한 값입니다.";
    echo "<pre>";
    var_dump($matches);
    echo "</pre>";
}
else{
    echo "정규식 표현에 적합하지 않음";
}
?>

