<?php
    $dbaction = $_POST['dbaction'];
    $id = $_POST['id'];
    $password = $_POST['password'];
	$name = $_POST['name'];

    $link = mysqli_connect('localhost','root','','fjufreedge');
  if($dbaction=="insert")
  {
	//這裡是新增的語法
	$sql  = "INSERT INTO `login`(`id`, ˋnameˋ, `password`, `level`) VALUES ('$id',ˋ$nameˋ,'$password','volunteer')";
	

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
	 $sql  = "update login set password='$password' where id='$id'";
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