<?php 
	include_once("dbconnection.php");
	//session_start();
	$sname = $_SESSION['s'];
	$res = mysqli_fetch_array(mysqli_query($bd,"SELECT name FROM login WHERE user_name='$sname'"));
	$name = array_values($res)[0];
	?>
	<ul>
	<li><a href="home.php" class="navbar-left">Mentor Jobs <br> Welcomes <?php echo $name?></a></li>
	</ul>
	
