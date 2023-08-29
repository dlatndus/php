<?php

$val = "true";

echo "val 데이터형 : ".gettype($val);
echo "<br>";

settype($val, 'bool');

echo "val 데이터형 : ".gettype($val);
echo "<br>";

var_dump($val);
?>


