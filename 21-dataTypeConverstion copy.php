<?php
$str = "문자열";
echo "변경 이전 => ".gettype($str)."<br>";

//강제형변환 느낌 근데 값이 자동으로 바뀌는 
$str = (int) $str;
echo "변경 이후 => ".gettype($str)."/".$str."<br>";

//----------------------

$str = "1234문자열";
echo "변경 이전 => ".gettype($str)."<br>";

$str = (int) $str;
echo "변경 이후 => ".gettype($str)."/".$str."<br>";

//----------------------

$double = 12.3;
echo "변경 이전 => ".gettype($double)."<br>";

$double = (int) $double;
echo "변경 이후 => ".gettype($double)."/".$double."<br>";

?>


