<?php

$isDateCheck = checkdate(2, 29, 2019);

if($isDateCheck){
    echo "유효한 날짜";
}
else{
    echo "안유효한 날짜";
}
?>

