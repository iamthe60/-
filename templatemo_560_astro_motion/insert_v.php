      <?php
              $name=$_POST['name'];
              $id=$_POST['id'];
              $time=$_POST['time'];
              $date=$_POST['date'];
              $location=$_POST['location'];

              $sql="insert into volunteer (name,id,time,date,location)
                  values ('$name','$id','$time','$date','$location') ";

              $link = mysqli_connect('localhost','root','12345678','fjufreedge');

              if(mysqli_query($link,$sql))
              {
                header("Location:index.php?message=新增完成");
              }
              else
              {
                header("Location:index.php?message=新增失敗");
              }
        ?>
