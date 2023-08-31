<?php
$num = 123456789;
// 000,000
echo number_format($num);
echo "<br>";

$num = 123456789.789;
// 소수점 둘째자리까지
echo number_format($num, 2);
echo "<br>";

$num = 123456789.789;
// 표시할수, 소수점 자릿수, 소수점 표시문자, 콤마 표시 문자
echo number_format($num, 2, '-', ':');
echo "<br>";

?>

