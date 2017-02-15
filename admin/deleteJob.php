<html>
<body>
<?php 
include_once("dbconnection.php");
//session_start();
if($_REQUEST['d']=="0")
{
    header('location:listJobs.php?m=0');
}
else
{
    $query="delete from jobs where jobId='".$_REQUEST['d']."'";
    mysqli_query($bd,$query);
    header('location:listJobs.php');
}
?>
</body>
</html>
