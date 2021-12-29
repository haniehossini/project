<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>جزئیات خبر</title>
	<link href="ccs/styletemp.css" rel="stylesheet" type="text/css">
</head>
<body>

	<?php include("header.php")?>
	
	<div id="container">
	
	<?php include("sidebar.php")?>
	<div id="main">
	<center>
		<?php
	 $conn=mysqli_connect("localhost","root","","haniehossini");
	if(!$conn)
	{
	die("ارتباط برقرار نشد".mysqli_connect_error());
	}
	if(isset($_GET['idn']))
	{
		$newsid=$_GET['idn'];
		$sql="SELECT * FROM tblnews where newsid='$newsid'";
		$res=mysqli_query($conn,$sql);
		if(mysqli_num_rows($res)==0)
		{
			echo " <br/><br/><b><h3>متاسفانه جزئیات خبر وجود ندارد</h3></b>";
		}
		else{
			$rows=mysqli_fetch_assoc($res);
			
	     $newsid=$rows['newsid'];
		$newstitle=$rows['newstitle'];
		$newsdesc=$rows['newsdesc'];
		$newsdate=$rows['newsdate'];
		$newsimage=$rows['newsimage'];
		$newsviewed=$rows['viewed'];
			
		$sql="UPDATE `tblnews` SET `viewed`=$newsviewed+1 WHERE `newsid`=$newsid";
			mysqli_query($conn,$sql);
			echo"
			  <div class='main_top'>
			  <h3>".$newstitle."</h3>
			  </div>
			  <div class='main_middle'>شرح خبر:<span>".$newsdesc."</span>
			  	 
				 <img src='$newsimage' width='100' height='100' />
			  </div>
			  <div class=main_bottem>
			  <a href=index.php>بازگشت</a>
			  </div>";
	
		}
	}
	mysqli_close($conn);
	?>
	</center>
		
	</div>
</body>
</html>