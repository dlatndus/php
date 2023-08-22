<?php
$num = 10;
$num += 2;

$num2 = 10;
$num2 -= 2;

$num3 = 10;
$num3 *= 2;

$num4 = 10;
$num4 /= 2;

$num5 = 10;
$num5 %= 2;

$str = "서울";
$str .= "특별시";

echo "+=".$num."<br>".
"-=".$num2."<br>".
"*=".$num3."<br>".
"/=".$num4."<br>".
"%=".$num5."<br>".
".=".$str."<br>" //이건 문자열 새로 더 붙일 때
?>