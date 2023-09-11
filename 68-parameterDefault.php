<?php

function sum($num1 = 50, $num2 = 100){
    $sum = $num1 + $num2;
    return $sum;
}
echo "5+10 = " . sum(5, 10) . "<br>";
echo "10+100 = " . sum(10) . "<br>";
echo "50+100 = " . sum() . "<br>";
?>

