<?php
define("FAVORITE_DOLL", "gelatoni");
echo "상수 FAVORITE_DOLL의 값은 ".FAVORITE_DOLL."<br>";

//상수라 밑에는 오류나오고 gelatoni나옴
define("FAVORITE_DOLL", "duffy");
echo "상수 FAVORITE_DOLL의 값은 ".FAVORITE_DOLL."<br>";
?>