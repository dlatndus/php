<?php
    $startTime = mktime(0, 55, 0, 8, 30, 2023);
    $endTime = mktime(0, 55, 59, 8, 30, 2023);

    $nowTime = time();

    if($nowTime >= $startTime && $nowTime <= $endTime){
        echo "이벤트 참여 가능";
    }
    else{
        echo "이벤트 시작전 혹은 종료";
    }
?>

