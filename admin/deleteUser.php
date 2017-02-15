<html>
<body>
<?php 
include_once("dbconnection.php");
$sname = $_SESSION['s'];
$res = mysqli_fetch_array(mysqli_query($bd,"SELECT name FROM login WHERE user_name='$sname'"));
$uname = array_values($res)[0];
//session_start();
if(($_REQUEST['user']=="admin")||($_REQUEST['user'] == $uname))
{
    header('location:listUsers.php?m=1');
}
else
{
    $query="delete from login where user_name='".$_REQUEST['user']."'";
    mysqli_query($bd,$query);
    header('location:listUsers.php');
}
?>
</body>
</html>
