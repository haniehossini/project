<!doctype html>
<html>
<head>

<title>تماس باما</title>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php include("header.php")?>
<div >
<div style="margin:auto;height:250px;width:100%;background:none;" align="left" >
	</div>
<div align="center">
	<fieldset style="width:5%;height:570px;margin:-200px 20px 0 0" dir="rtl">
		<legend align="right"><b>تماس باما</b></legend>
<form style="margin: 50px 80px 20px 20px" action="tamas1.php" method="post">

  <div align="right">
	       
 	       <span style="margin: 10px 10px 10px 10px"><b>نام شما</b></span><i  class="icon-user icon-2x"> </i><br/>
 	          <input type="text" name="firstname" placeholder="نام شما " dir="rtl">
<p>&nbsp;</p>
   <span  style="margin: 10px 10px 10px 10px"><b>ایمیل</b></span> <i class="icon-envelope-alt icon-2x"></i><br/>
    <input type="text" name="email" placeholder="ایمیل" dir="rtl"/>
 	          <p>&nbsp;</p>
   <span  style="margin: 10px 10px 10px 10px"><b>تلفن شما</b></span><i class="icon-phone icon-2x"></i><br/>
     <input type="text" name="phone" placeholder="تلفن شما" dir="rtl"/>
     <p>&nbsp;</p>
   	<span style="margin: 10px 10px 10px 10px"><b>پیام شما</b></span><i class="icon-envelope icon-2x"></i><br/>
   	<textarea placeholder="پیام شما" rows="7" cols="30" dir="rtl" name="payam"></textarea><br/>
   	<input type="submit" name="s" value="...ارسال" dir="ltr" style="margin:5px 30px 80px 200px; width:25%;height:30px"/>
	<form/>
	</fieldset>
	 </div>
	 </div>
	 <?php
	$conn=mysqli_connect("localhost","root","","project");
	if(!$conn)
	{
		die("ارتباط با دیتابیس برقرار نشد ".mysqli_connect_error);
	}
	if(isset($_POST["s"]))
	{
		$n=$_POST["firstname"];
		$e=$_POST["email"];
		$m=$_POST["phone"];
		$mt=$_POST["payam"];		
		 $sql="INSERT INTO `tbltamas` (`name`, `email`, `phone`, `payam`) VALUES ('$n','$e','$m','$mt')";
		$res=mysqli_query($conn,$sql);
		if($res)
	
			echo " <center>پیام شما ارسال شد </center>";
	else
		
			echo "<center>پیام ارسال نشد </center> ".mysqli_error;
	}
	mysqli_close($conn);
	
	?>
		</main>
	
	</div>
</body>


