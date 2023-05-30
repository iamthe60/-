<?php
$dbaction = $_POST['dbaction'];
$today = date('Y/m/d H:i:s');
$date = date("Y/n/j");  
$time = $_POST['time'];
$link = mysqli_connect('localhost','root','12345678','fjufreedge');
  if($dbaction=="insert")
  {
	//這裡是新增的語法
	$sql  = "INSERT INTO `time`(`updatetime`, `date`, `time`) VALUES ('$today','$date','$time');";
	

  if(mysqli_query($link,$sql))
	  {
	    //echo "新增成功";
		// header("Location:volunteerlogin.php?message=新增完成");
		echo "<script>alert('公告成功！'); location.href = 'index.php';</script>";
	  }
	else
	  {
	    header("Location:index.php?message=公告失敗");
	  }
  }
  else
  {
	  
  }





?>