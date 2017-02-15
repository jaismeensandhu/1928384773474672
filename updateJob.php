<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if((isset($_SESSION['s'])==""))
{header("location:./index.php");
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
$jobId=$_REQUEST['jobId'];
include_once("dbconnection.php");
$q="select * from jobs where jobId='".$jobId."'";
$exe=mysqli_query($bd,$q);
$a=mysqli_fetch_assoc($exe);
?>
<h1><center><font color="#000" >Update Job</font></center></h1>
<form id="contact" class="register" action="updateJobInsert.php?jobId=<?php echo $jobId ?>" method="POST" enctype="multipart/form-data">
 <fieldset class="row1"><legend>Job Description</legend>
                <p>
                    <label class="obinfo">* Required fields</label>
                </p>
                <p>
                    <label>Title *</label>
                    <input name="title" id="title" type="text" value="<?php echo $a['title'];?>"/>
                </p>
                <p>
                    <label>Job Type *</label>
                    <?php $selected = $a['jobtype'];?>
                    <select name="type" id="type">
                        <option <?php if($selected == 'Fulltime/Contract'){echo("selected");}?> value="Fulltime/Contract">Fulltime/Contract</option>
                        <option <?php if($selected == 'Contract'){echo("selected");}?> value="Contract">Contract</option>
                        <option <?php if($selected == 'Fulltime'){echo("selected");}?> value="Fulltime">Fulltime</option>
                        <option <?php if($selected == 'Contract to Hire'){echo("selected");}?> value="Contract to Hire">Contract to Hire</option>
                        <option <?php if($selected == 'Parttime'){echo("selected");}?> value="Parttime">Parttime</option>
                        <option <?php if($selected == 'Any'){echo("selected");}?> value="Any">Any</option>
                    </select>
                </p>
                <p>
                    <label>Location</label>
                    <input name="location" id="location" type="text" value="<?php echo $a['location'];?>"/>
                </p>
                <p>
                    <label>Experience</label>
                    <input name="experience" id="experience" type="text" value="<?php echo $a['experience'];?>"/>
                </p>
                
            </fieldset>
            <fieldset class="row1">
                <legend>Job Details</legend>
            <center>    <p>
                    <label>Job Description *</label>
                    <textarea name="description" id="description"><?php echo $a['description'];?></textarea>
                </p>
                <p>
                    <label>Basic Qualitfications</label>
                    <textarea name="qualification" id="qualification"><?php echo $a['qualification'];?></textarea>
                </p>
                <p>
                    <label>Professional Skill Requirements</label>
                    <textarea name="skills" id="skills"><?php echo $a['skills'];?></textarea>
                </p>
                <p>
                    <label>Positions</label>
                    <input name="positions" id="positions" type="text" value="<?php echo $a['positions'];?>"/>
                </p>
                <p>
                    <label>Salary</label>
                    <input name="salary" id="salary" type="text" value="<?php echo $a['salary'];?>"/>
                </p>
                </center>
            </fieldset>
            <div class="col-sm-12"><button name="submit" id="submit" class="button">Post Job &raquo;</button></div></form>
</body>
</html>
<?php } ?>