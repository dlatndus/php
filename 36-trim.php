<?php

$str = " 양쪽 공백 다 없앰 ";
echo "|" . trim($str) . "|";

echo "<br>";

$str = " 앞쪽 공백 다 없앰";
echo "|" . ltrim($str) . "|";

echo "<br>";

$str = "뒷쪽 공백 다 없앰 ";
echo "|" . rtrim($str) . "|";

echo "<br>";

?>


