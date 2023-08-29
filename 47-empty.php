<?php

$val = '';
echo "값이 빈 문자열인 경우";
var_dump(empty($val));
echo '<br>';

$val = null;
echo "값이 null 문자열인 경우";
var_dump(empty($val));
echo '<br>';

$val = array();
echo "값이 빈 배열인 경우";
var_dump(empty($val));
echo '<br>';

$val =0;
echo "값이 0인 경우";
var_dump(empty($val));
echo '<br>';

$val = '0';
echo "값이 문자 0인 경우";
var_dump(empty($val));
echo '<br>';

$val = 'string';
echo "값이 문자 string인 경우";
var_dump(empty($val));
echo '<br>';
?>


