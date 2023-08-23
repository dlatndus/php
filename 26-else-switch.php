<?php
$gender = "woman";
$num = 2;

if($gender == "man"){
    echo "남자ㄴㄴ";
}else switch($num){
    case 1:
        echo "1임";
        break;
     case 2:
        echo "2임";
        break;
     case 3:
        echo "3임";
        break;
    default:
        echo "1, 2, 3은 아님";
        break;
}

?>


