<?php
$pattern = '/^[a-zA-Z가-힣. ]+$/'; //영어 대소문자, 한글, 띄어쓰기가 들어있고 1byte이상

$str = '이여as aA';

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

