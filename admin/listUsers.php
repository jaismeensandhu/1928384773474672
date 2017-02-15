<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if((isset($_SESSION['s'])==""))
{header("location:./index.php");
}
else
{
    include_once("dbconnection.php");
    $sname = $_SESSION['s'];
	$res = mysqli_fetch_array(mysqli_query($bd,"SELECT permission FROM login WHERE user_name='$sname'"));
	$permission = array_values($res)[0];
	if(($permission != 'admin')) 
	{  
        header("location:./home.php");
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
			<div id="utable">
            <center>
                <h3><b>User Profiles</b></h3>    
                <table>
                <?php
                    include_once("dbconnection.php");
                    ?>
                    <tr>	
                        <td>Name</td>
                        <td>User Name</td>
                        <td>Edit Profile</td>
                        <td>Delete</td>
                    </tr>
                    <?php
                        $q="select * from login";
                        $exe=mysqli_query($bd,$q);
                        while($a=mysqli_fetch_assoc($exe))
                        {
                    ?>
                            <tr>
                                <td><?php echo $a['name'];?></td>
                                <td><?php echo $a['user_name'];?></td>
                                <td><a href="editUser.php?user=<?php echo $a['user_name'];?>">Edit</a></td>
                                <td><a href="deleteUser.php?user=<?php echo $a['user_name'];?>">X</a></td>
                            </tr>
                    <?php
                }
                if(isset($_REQUEST['m'])==1)
                {
                echo "Admin's or Your own account can not be deleted.";
                }

                ?>
                </table>
             </center>
			</div><!-- end #page -->
			<div id="footer-bgcontent">
				<div id="footer">
					<?php
						include("includes/footer.inc.php");
					?>	
				</div><!-- end #footer -->
			</div><!-- end #Footer Content -->
		</div><!-- end #wrapper -->
</body>
</html>
<?php }} ?>
