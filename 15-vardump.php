<?php
$dr = array('continent'=>array());

$dr['continent']['america'] = array();
$dr['continent']['america'][0] = '애너하임';
$dr['continent']['america'][1] = '올랜도';

$dr['continent']['asia'] = array();
$dr['continent']['asia'][0] = '서울';
$dr['continent']['asia'][1] = '도쿄';

//pre 태그를 이용하면 좀 더 보기 쉽게 바꿔줌
echo "<pre>";
var_dump($dr); //배열 구조 보여줌
echo "</pre>";

/**
 array(1) {
  ["continent"]=>
  array(2) {
    ["america"]=>
    array(2) {
      [0]=>
      string(12) "애너하임"
      [1]=>
      string(9) "올랜도"
    }
    ["asia"]=>
    array(2) {
      [0]=>
      string(6) "서울"
      [1]=>
      string(6) "도쿄"
    }
  }
}
 */

?>


