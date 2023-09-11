<?php
$pattern = '/^[a-zA-Z]{1}[a-zA-z0-9.\-_]+@[a-z0-9]{1}(([a-z]{1}[a-z.]+[a-z]{1})|([a-z]+))$/'; //이메일 검사 1byte이상

$str = 'asd_f@naver.com';

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

