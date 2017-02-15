<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
    session_start();
    if((isset($_SESSION['s'])==""))
    {
        header("location:./index.php");
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
                <div id="menu">
                    <?php
                        include("includes/menu.inc.php");
                    ?>
	            </div>
		        <!-- end #menu -->
	        </div><!-- end #header -->
        </div><!-- end #header-wrapper -->
        <?php
        $ruser=$_REQUEST['user'];
        include_once("dbconnection.php");
        $q="select * from login where user_name='".$ruser."'";
        $exe=mysqli_query($bd,$q);
        $a=mysqli_fetch_assoc($exe);
        ?>
        <h1><center><font color="#000" >Edit User Profile</font></center></h1>
        <form id="contact" class="register" action="editUserInsert.php?user=<?php echo $ruser ?>" method="POST">
            <fieldset class="row1">
                <p>
                    <label class="obinfo">* Required fields</label>
                </p>
                <p>
                    <label>Full Name *</label>
                    <input name="fullName" id="fullName" type="text" value="<?php echo $a['name'];?>"/>
                </p>
                <p>
                    <label>Username *</label>
                    <input name="username" id="username" type="text" readonly value="<?php echo $a['user_name'];?>"/>
                </p>
                <p>
                    <label>Password *</label>
                    <input name="password" id="password" type="text" value="<?php echo $a['password'];?>"/>
                </p>
                <p>
                    <label>Permission *</label>
                     <?php $checked = $a['permission'];?>
                    <div id="rbtn" class="rbtnc">
                        <table>
                            <tr><td><input name="permission" style="width:40px" type="radio" value="user" <?php if($checked == 'user'){echo('checked="checked"');}?> /></td><td>User</td></tr>
                            <tr><td><input name="permission" style="width:40px" type="radio" value="su" <?php if($checked == 'su'){echo('checked="checked"');}?>/></td><td>Super User</td></tr>
                            <tr><td><input name="permission" style="width:40px" type="radio" value="admin" <?php if($checked == 'admin'){echo('checked="checked"');}?>/></td><td>Admin</td></tr>
                        </table>
                    </div>
                </p>
            </fieldset>
            <div class="col-sm-12"><button name="submit" id="submit" class="button">Submit &raquo;</button></div></form>
</body>
</html>
<?php } }?>