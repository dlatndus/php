<?php

    $year = 2019;
    $month = 4;
    $day = 4;

    $targetDateTimeStamp = mktime(0, 0, 0, $month, $day, $year);

    $dayOfWeek = date('w', $targetDateTimeStamp);

    $secondOfOneDay = 60*60*24;

    switch($dayOfWeek){
        case 1: // 2019년 4월 4일이 월요일이라면
            $monday = $targetDateTimeStamp;
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 4);
            break;
        case 2: // 2019년 4월 4일이 화요일이라면
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 1);
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 3);
            break;
        case 3: // 2019년 4월 4일이 수요일이라면
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 2);
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 2);
            break;
        case 4: // 2019년 4월 4일이 목요일이라면
                $monday = $targetDateTimeStamp - ($secondOfOneDay * 3);
                $friday = $targetDateTimeStamp + ($secondOfOneDay * 1);
                break;
        case 5: // 2019년 4월 4일이 금요일이라면
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 4);
            $friday = $targetDateTimeStamp;
            break;


    }

    if(isset($monday) && isset($friday)){
        echo "{$year}년 {$month}월 {$day}일 이 있는 주의 월요일과 금요일의 날짜<br>";
        echo "월 : " . date("Y-m-d", $monday) . "<br>";
        echo "금 : " . date("Y-m-d", $friday);
    }
    else{
        echo " 월~ 금 중의 날짜를 입력하시오";
    }
?>

