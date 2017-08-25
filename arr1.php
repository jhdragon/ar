<?php
/**
从数组中取日期和当前年月判断，如果大于则不处理后面的了。如果小于则计算

或者这样处理，压数组前判断一下年份是否大于2020年，如果大于则不压数组了
**/
/**
 * 最新说明
 * 从审核通过的那一刻开始计算，默认是10个月，当今天大于日期后，将不再压栈
 */

//echo strtotime("2009-10-21 16:00:10")."<br>";
//echo strtotime("2009-10-21")."<br>";
//日期转成时代戳,然后压数组

//$a='1103481111';
//
echo strtotime("2017-5-21");
//$a='1490645412';
$a='1490054400';
//$a='1503646412';
$aa=date("Y-m-d",$a);
//echo date("Y-m-d",$a)."<br>";
$b='1503581974';
//echo date("Y-m-d",$b)."<br>";
$current=time();
//$date_ar=['1103481111','1503581974'];
//var_dump($date_ar);
//echo   date("Y-m-d",strtotime("+1 month",strtotime("2012-02-04")));
$d=['check'=>[],'view'=>[]];
for($i=0;$i<10;$i++) {
	if($i==0){

		//array_push($d,$a);
	}else {
		$c=date("Y-m-d",strtotime("+".$i." month",strtotime($aa)));
		
		$e=strtotime($c);
		if($current>$e){
			array_push($d['check'],$e);	
		}else{
			
		}
		
	}
}

$d_l=count($d['check']);
for($x=0;$x<$d_l;$x++) {
	$cc=date("Y-m-d",$d['check'][$x]);
	//echo $cc."<br>";
	array_push($d['view'],$cc);
}
print_r($d);
?>

<select>
<?php foreach($d['view'] as $v=>$k){ ?>
	<option value="<?php echo $v;?>"><?php echo $k;?></option>
<?php }?>	
</select>