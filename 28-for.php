<?php

for($i = 1; $i <= 10; $i++){
    echo $i.', ';
}

$sum =0;
$maxValue = 50;

for($i = 1; $i <= $maxValue; $i++){
    if($i % 2 == 0){
        $sum += $i;
    }
}

echo "1부터 {$maxValue}까지의 짝수 누적합 : {$sum}<br>";

for($i = 0; $i <= 10; $i++){
    if($i == 5){
        break;
    }
    echo $i.', ';
}
echo '<br>';

for($i = 0; $i <= 10; $i++){
    if($i == 5){
        continue;
    }
    echo $i.', ';
}
echo '<br>';

for($i = 1; $i <= 3; $i++){
    echo "바깥쪽 for문 횟수 : {$i}<br>";
    for($n = 1; $n <= 3; $n++){
        echo "안쪽 for문 횟수 : {$n}<br>";
    }
    echo '<br>';
}
echo '<br>';

for($i = 2; $i <= 3; $i++){
    echo "2단 ";
    for($n = 1; $n <= 9; $n++){
        $mul = $i * $n;
        echo "{$i} X {$n} = {$mul} <br>";
    }
    echo '<br>';
}
echo '<br>';

?>


