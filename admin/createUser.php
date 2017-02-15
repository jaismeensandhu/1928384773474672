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
	if($permission != 'admin') 
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
			<div id="page">
				<div id="page-bgtop col-sm-12 col-lg-12">
						<div id="content col-sm-12 col-lg-12">
							<div class="post col-sm-12 col-lg-12">
								<h2 class="title"><center><font><b>Create User</b></center></font></a></h2>
                                <script type="text/javascript">
            function abc()
            {   
                if(document.getElementById("name").value=="")
                {
                    alert("Please enter your name");
                    return false;
                }
                else
                if(document.getElementById("username").value=="")
                {
                    alert("Please enter your username");
                    return false;
                }
                else
                if(document.getElementById("password").value=="")
                {
                    alert("Please enter your password");
                    return false;
                }
                else
                if(document.getElementById("cpassword").value=="")
                {
                    alert("Please confirm your password");
                    return false;
                }
                else
                if(document.getElementById("password").value!=document.getElementById("cpassword").value)
                {
                    alert("Password and Confirm Password MISMATCH");
                    return false;
                }
                else
                {
                    return true;
                }	
            }
        </script>
                                <form action="userInsert.php" method="get">
                                    <center><table id="utable">
                                        <tr>
                                            <td>Full Name *</td>
                                            <td><input type="text" name="name" id="name"/></td>
                                        </tr>
                                        <tr>
                                            <td>Username *</td>
                                            <td><input type="text" name="username" id="username"/></td>
                                        </tr>
                                        <tr>
                                            <td>Password *</td>
                                            <td><input type="password" name="password" id="password"/></td>
                                        </tr>
                                        <tr>
                                            <td>Confirm Password *</td>
                                            <td><input type="password" id="cpassword"/></td>
                                        </tr>
                                        <tr>
                                            <td>Permission *</td>
                                            <td>
                                                <table style="width:100%;margin:0;height:100%;">
                                                    <tr><td><input name="permission" style="width:40px" type="radio" value="user" checked="checked"/></td><td>User</td></tr>
                                                    <tr><td><input name="permission" style="width:40px" type="radio" value="su"/></td><td>Super User</td></tr>
                                                    <tr><td><input name="permission" style="width:40px" type="radio" value="admin" /></td><td>Admin</td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><button type="reset">Reset</button></td>
                                            <td><button type="submit" onClick="return abc();">Sign Up</button></td>
                                        </tr>
                                    </table></center>
                                </form>
                                <?php
                                    if(isset($_REQUEST['a'])==1)
                                    {
                                        echo "This username already exists. Please select some other username.";
                                    }
                               ?>
                        </div><!-- end #post -->
					</div><!-- end #content -->
				</div>
			</div><!-- end #page -->
			<div id="footer-bgcontent">
				<div id="footer">
					<?php
						include("includes/footer.inc.php");
					?>	
				</div><!-- end #footer -->
			</div>
		</div>
</body>
</html>
<?php }} ?>
