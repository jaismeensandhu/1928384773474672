<?php
$mysql_hostname = "localhost";
$mysql_user ="root";
$mysql_password ="root";
$mysql_database ="mentortechsource";

$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("oops !Could not connect database");
//mysqli_select_db($bd, $mysql_database) or die("opps! database not connected");

?>
