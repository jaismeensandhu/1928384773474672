
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mentor Admin Portal</title>
<link href="style.css" rel="stylesheet" />
</head>

<body style="background-color:#050F7E;">

<div style="width:1048px; height:120px; font-size:44px; font-style:italic; color:#FFFFFF; margin:auto;">
<p style="margin-top:60px; " ><center><b>WELCOME to MENTOR Jobs</b>	</center>  </p> </div>

<div style="width:1048px; height:500px; margin-top:0px; margin:auto;  ">
	<center><form action="index.php" method="post" name="form">
<table width="523" height="144" border="1" class="text" style="background-color:#gray; margin-top:100px;">
  <tr>
    <td width="158">Admin Name:</td>
    <td width="349"><input type="text" name="name" id="name"  style=" margin-left:70px;"></td>
  </tr>
  <tr>
    <td> Admin Password:</td>
    <td><input type="password" name="password" id="password" style=" margin-left:70px;"/></td>
  </tr>
  <tr>

    <td colspan="2"><input type="submit" name="submit" id="submit" value="submit" style=" margin-left:150px;background-color:#0033FF; width:70px;border-radius: 0px 10px 0px 10px;"/></td>
  </tr>
</table>
</form>
</center>
<?php
 if(isset($_POST['submit']))
{	
  $username=$_POST['name'];
	$password=$_POST['password'];
  include('dbconnection.php');	
  $exe=mysqli_query($bd,"select * from login where user_name='".$username."'");
 
  if($result=mysqli_fetch_array($exe))
  {
	if($result['user_name']==$username && $result[password]== $password)
	{
    session_start();
    $_SESSION['s']=$username;
		header('Location:home.php');
	}
	else
	{
		echo "<script>alert('User Id or Password does not match !!');</script>";
	}
}	
}
?>
</div>
</div>
</body>
</html>