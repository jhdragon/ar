<?php

$a='1103481111';
$aa=date("Y-m-d",$a);
echo date("Y-m-d",$a)."<br>";
$b='1503581974';
echo date("Y-m-d",$b)."<br>";
$date_ar=['1103481111','1503581974'];
var_dump($date_ar);
//echo   date("Y-m-d",strtotime("+1 month",strtotime("2012-02-04")));
$d=[];
for($i=0;$i<200;$i++) {
	$c=date("Y-m-d",strtotime("+".$i." month",strtotime($aa)));
	array_push($d,$c);
}
var_dump($d);
//echo   date("Y-m-d",strtotime("+1 month",strtotime($aa)));