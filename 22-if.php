<?php
$num1 = 5;
$num2 = 5;

if($num1 == $num2)
    echo "num1, 2 같음";
else
    echo "num1, 2 다름";

echo "<br>";

if($num1 == 4 && $num2 == 4)
    echo "둘다 4";
else if($num1 == 4 || $num2 == 4)
    echo "둘중하나는 4";
else
    echo "아무것도 4가 아님";
?>


