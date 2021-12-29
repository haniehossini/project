 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>antghadt</title>
<link rel="stylesheet" type="text/css" href="css/c.css"/>


</head>

<body>
<?php include("header.php")?>
<div id="header">


<div class="bigwidth" id="big">
<span class="message"><big>انتقادات</big></span>
<p>&nbsp;</p>
<p>&nbsp; </p>
<p align="right" style="padding:0px 20px 0 20px;">برای ارتباط با مسئولان سایت می توانید از فرم زیر استفاده کنید <br/>
تکمیل بخش هایی که با *نشان داده شده است الزامی می باشد</p>
<div align="center" style="padding:20px 20px 20px 20px; ">
<form action="anteght.php" method="post">
<fieldset style="width: 500px ;height:500px;direction: rtl"> 
<legend>انتقادات</legend>
نام ونام خانوادگی(*):<input type="text" name="nam"><br/><br/>
کدملی(*):<input type="text" name="nam1"><br/><br>
شماره تلفن همراه(*):<input type="text" name="nam2"><br/><br>
متن انتقاد(*):<textarea rows="5" cols="20" name="txtad"></textarea><br/><br>
 <input type="submit" class="btm" name="sa" value=" ارسال"/><br>


	
	<span>شماره تماس:</span>
	<span style="color:
	#000000" >22240203-4</span><br/>
	<span>شماره نمابر:</span>
	<span style="color: #000000">22240153داخلی4</span><br/>
	<span>آدرس:</span>
	<span style="color: #000000">خ شریعتی -بالاتر از پل صدر ,خ شهید میرزاپور,پلاک38</span><br/>

	<span style="color: #000000">khayeran@yahoo.com</span>
		<span>:ایمیل</span><br/>
	<span>شماره حساب مجمع خیرین مدرسه ساز کشور</span><br/>
	<span>شماره حساب بانک ملت شعبه زرگنده :0106778021008</span><br/>
	<span>IR260170000000106778021008</span>
	<span>:شماره شبا</span><br/>
	<span>6037-9911-9952-0887:(شماره کارت (بانک ملت</span>
	
		<form/>
		</fieldset>
		<div/>
		<div/>
		 <?php
	$conn=mysqli_connect("localhost","root","","project");
	if(!$conn)
	{
		die("ارتباط با دیتابیس برقرار نشد ".mysqli_connect_error);
	}
	if(isset($_POST["sa"]))
	{
		$n=$_POST["nam"];
		$e=$_POST["nam1"];
		$m=$_POST["nam2"];
		$mt=$_POST["txtad"];		
		 $sql="INSERT INTO `tblantaght` (`namefamily`, `codemaly`, `phone`, `matn`) VALUES ('$n','$e','$m','$mt')";
		$res=mysqli_query($conn,$sql);
		if($res)
	
			echo " <center>پیام شما ارسال شد </center>";
	else
		
			echo "<center>پیام ارسال نشد </center> ".mysqli_error;
	}
	mysqli_close($conn);
	
	?>
		<a href="out.php"><h3>خروج</h3></a></center>
	</div>
	</body>
	