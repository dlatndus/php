<?php

$num = 2;

switch($num){
    case ($num >= 0 && $num <=10):
        echo "0~10임";
        break;
     case ($num >= 11 && $num <=20):
        echo "11~20임";
        break;
     case ($num >= 21 && $num <=30):
        echo "21~30임";
        break;
    default:
        echo "0~30은 아님";
        break;
}

?>


