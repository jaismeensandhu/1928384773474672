
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if((isset($_SESSION['s'])==""))
{ 
    header("location:./index.php");
}
else
{
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("includes/head.inc.php");
?>
</head>
    <body>
        <div id="header-wrapper">
			<div id="header">
				<div id="logos">
					<?php
						include("includes/logo.inc.php");
					?>
				</div><!-- end #logos -->
				<div id="menu">
					<?php
						include("includes/menu.inc.php");
					?>
				</div><!-- end #menu -->
			</div><!-- end #header -->
		</div><!-- end #header-wrapper -->
        <div id="wrapper">
            <div>
                <table class = "table">
                <center><h1 style="color:#000">List Jobs</h1></center>
                    <thead>
                        <tr>
                            <td><center><strong>Title</strong></center> </td>
                            <td><center><strong>Job Type</strong> </center></td>
                            <td><center><strong>Location</strong></center> </td>
                            <td><center><strong>Experience</strong> </center></td>
                            <?php 
                            include_once("dbconnection.php");
                            $sname = $_SESSION['s'];
                            $res = mysqli_fetch_array(mysqli_query($bd,"SELECT permission FROM login WHERE user_name='$sname'"));
                            $permission = array_values($res)[0];
                            if(($permission == 'admin') ||($permission == 'su'))
                            {?>
                            <td><center><strong>Edit</strong></center></td>
                            <td><center><strong>Delete</strong></center></td>
                            <?php }?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include_once("dbconnection.php");
                        $query="SELECT * FROM jobs ORDER BY addition_date DESC";
                        $results = mysqli_query($bd,$query);
                        $a = 0;

                        while($row = mysqli_fetch_assoc($results)) {
                        $a++;
                        echo '<script type = "text/javascript">c++;</script>'
                        ?>
                            <tr>
                                <td><center><?php print '<a href="showJob.php?ID='.$row['jobId'].'">'.$row['title'].'</a>'; ?></center></td>
                                <td><center><?php echo $row['jobtype']?></center></td>
                                <td><center><?php echo $row['location']?></center></td>
                                <td><center><?php echo $row['experience']?></center></td>
                                <?php if(($permission == 'admin') ||($permission == 'su'))
                                { ?>
                                <td><?php print '<center><a href="updateJob.php?jobId='.$row['jobId'].'">Edit</a></center>'; ?></td>
                                <td><center><a href="deleteJob.php?d=<?php echo $row['jobId'];?>">X</a></center></td>
                                <?php }?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div><!-- end #page -->
            
            <div id="footer-bgcontent">
	            <div id="footer">
                    <?php
                    include("includes/footer.inc.php");
                    ?>	
                </div>
            </div><!-- end #footer -->
        </div><!-- end #wrapper -->
    </body>
</html>
<?php } ?>