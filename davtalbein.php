<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>داوطلبین</title>
	<link href="css/style1.css" rel="stylesheet" type="text/css">
	
</head>

<body>

	<?php include("header.php")?>
	
<center>
<fieldset style="width:55%;">
<legend>فرم داوطلب</legend>
<form method="post" action="">

نام ونام خانوادگی:
	<input type="text" name='namefamily' >
نام پدر:
	<input type="text" name='namepadar'>
	کدملی:
	<input type="text" name='kodmally'>
	تحصیلات:
	<input type="text" name='tahselat' style="margin: 30px">
	رشته:
	<input type="text" name='reshte'>
	شغل:
	<input type="text" name='shogl'><br>
	تخصص:
	<input type="text" name='takasos'>
	استان:
	<input type="text" name='ostan'>
	شهر:
	<input type="text" name='sahr'><br>
	شماره تماس:
	<input type="text" name='somaretamas' style="margin: 30px">
	نوع همکاری :
	<input type="text" name="hamkare"><br>
	آدرس محل سکونت:<br>
	<textarea rows="3"  cols="60" name="adress"></textarea><br>
<input type="submit" value="ثبت" name="s" style="margin: 20px;height: 50px; width: 120px">
</form>
</fieldset>
</center>
 <?php
	$conn=mysqli_connect("localhost","root","","project");
	if(!$conn)
	{
		die("ارتباط با دیتابیس برقرار نشد ".mysqli_connect_error);
	}
	if(isset($_POST["s"]))
	{
		$n=$_POST["namefamily"];
		$e=$_POST["namepadar"];
		$m=$_POST["kodmally"];
		$mt=$_POST["tahselat"];	
		$m1=$_POST["reshte"];
		$m2=$_POST["shogl"];
		$m3=$_POST["takasos"];
		$m4=$_POST["ostan"];
		$m5=$_POST["sahr"];
		$m6=$_POST["somaretamas"];
		$m7=$_POST["hamkare"]; 
		$m8=$_POST["adress"];
		
		 $sql="INSERT INTO `tbldavtalab` (`namefamily`, `namefather`, `codemely`, `taselat`, `reshte`, `shoghel`, `takhasos`, `ostan`, `shar`, `shomaretamas`, `noyehamkare`, `Adress`)VALUES('$n','$e','$m','$mt','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8')";
		$res=mysqli_query($conn,$sql);
		if($res)
		
			echo "<center>اطلاعات شما ثبت شد</center>";
	else
			echo "<center>اطلاعاتارسال نشد</center> ".mysqli_error();
	}
	mysqli_close($conn);
	
	?>
	</body>
	</html>