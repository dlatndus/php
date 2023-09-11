<?php
$pattern = '/^[가-힣]{3,}$/'; //한글로 시작하고 한글로 끝나는 1글자 이상인지 확인

$str = '웹코딩시작하기';

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

