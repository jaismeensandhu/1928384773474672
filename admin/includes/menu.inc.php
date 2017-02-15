
	<ul >
		
		<?php 
			include_once("dbconnection.php");
			$sname = $_SESSION['s'];
			$res = mysqli_fetch_array(mysqli_query($bd,"SELECT permission FROM login WHERE user_name='$sname'"));
			$permission = array_values($res)[0];
			if($permission == 'admin')
			{
		?>
				<li><a href="home.php" class="first navbar-right">Home</a></li>
				<li><a href="addJob.php">Add Job</a></li>
				<li><a href="listJobs.php">Jobs</a></li>
				<li><a href="createUser.php">Create User</a></li>
				<li><a href="listUsers.php">Users</a></li>
				<li><a href="logout.php">Logout</a></li>
		<?php
			}
			else if($permission == 'su'){
		?>
				<li><a href="home.php" class="first navbar-right">Home</a></li>
				<li><a href="addJob.php">Add Jobs</a></li>
				<li><a href="listJobs.php">Jobs List</a></li>
				<li><a href="logout.php">Logout</a></li>
		<?php
			}
			else if($permission == 'user')
			{
		?>
				<li><a href="home.php" class="first navbar-right">Home</a></li>
				<li><a href="listJobs.php">Jobs List</a></li>
				<li><a href="logout.php">Logout</a></li>
		<?php
			} else {
				header("location:./index.php");
			}
		?>
	</ul>