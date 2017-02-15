<?php
        if(isset($_POST['submit']))
        {	
          $username=$_POST['name'];
          $password=$_POST['password'];
          include('dbconnection.php');	
          $exe=mysqli_query($bd,"select * from login where user_name='".$username."'");
          if($result=mysqli_fetch_array($exe))
          {
            if($result['user_name']==$username && $result['password']== $password)
            {
              session_start();
              $_SESSION['s']=$username;
              header('location:home.php');
            }
            else
            {
              echo "<script>alert('User Id or Password does not match !!');</script>";
              header('location:index.php');
            }
          }
          else
          {
            echo "<script>alert('User Id does not exist!! Please contact your admin');</script>";
            header('location:index.php');
          }	
        }
  ?>