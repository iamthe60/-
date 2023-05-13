<?php
    $dbaction = $_POST['dbaction'];
    $account = $_POST['account'];
    $password = $_POST['password'];

    $link = mysqli_connect('localhost','root','12345678','fjufreedge');
  if($dbaction=="insert")
  {
	//這裡是新增的語法
	$sql  = "insert into login (account,password) values ('$account', '$password')";


  if(mysqli_query($link,$sql))
	  {
	    //echo "新增成功";
		header("Location:volunteerlogin.php?message=新增完成");
	  }
	else
	  {
	    header("Location:account_insert.php?message=新增失敗");
	  }
  }
  else
  {
	  //這裡是修改
	 $sql  = "update login set password='$password' where account='$account'";
    if(mysqli_query($link,$sql))
	  {
	    header("Location:volunteerlogin.php?message=修改完成");
	  }
	else
	  {
	    header("Location:volunteerlogin.php?message=修改失敗");
	  }
  }
?>