<?php
/**
从数组中取日期和当前年月判断，如果大于则不处理后面的了。如果小于则计算

或者这样处理，压数组前判 断一下年份是否大于2020年，如果大于则不压数组了
**/

echo strtotime("2009-10-21 16:00:10")."<br>";
echo strtotime("2009-10-21")."<br>";
//日期转成时代戳,然后压数组

$a='1103481111';
$aa=date("Y-m-d",$a);
echo date("Y-m-d",$a)."<br>";
$b='1503581974';
echo date("Y-m-d",$b)."<br>";

//$date_ar=['1103481111','1503581974'];
//var_dump($date_ar);
//echo   date("Y-m-d",strtotime("+1 month",strtotime("2012-02-04")));
$d=[];
for($i=0;$i<10;$i++) {
	if($i==0){
		array_push($d,$a);
	}else {
		$c=date("Y-m-d",strtotime("+".$i." month",strtotime($aa)));
		array_push($d,$c);
	}
}
print_r($d);
//echo   date("Y-m-d",strtotime("+1 month",strtotime($aa)));