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
	if(($permission != 'admin') && ($permission != 'su')) 
	{  
        header("location:./home.php");
    }
    else
    {
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mentor Add Jobs</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css" media="screen"/>
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
            <form id="contact" class="register" action="add_job_insert.php" method="POST" enctype="multipart/form-data">
           <center><h1>Post New Job</h1></center>
            <fieldset class="row1"><legend>Job Description</legend>
                <p>
                    <label class="obinfo">* Required fields</label>
                </p>
                <p>
                    <label>Title *</label>
                    <input name="title" id="title" type="text"/>
                </p>
                <p>
                    <label>Job Type *</label>
                    <select name="type" id="type">
                        <option value="Fulltime/Contract">Fulltime/Contract</option>
                        <option value="Contract">Contract</option>
                        <option value="Fulltime">Fulltime</option>
                        <option value="Contract to Hire">Contract to Hire</option>
                        <option value="Parttime">Parttime</option>
                        <option value="Any">Any</option>
                    </select>
                </p>
                <p>
                    <label>Location</label>
                    <input name="location" id="location" type="text"/>
                </p>
                <p>
                    <label>Experience</label>
                    <input name="experience" id="experience" type="text"/>
                </p>
            </fieldset>
             <script type="text/javascript" src="./nicEdit.js"></script>
             <script type="text/javascript">
	             bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
            </script>
            <fieldset class="row1">
                <legend>Job Details</legend>
            <center>    <p>
                    <label>Job Description *</label>
                    <textarea name="description" id="description" style="width: 400px; height: 100px;max-width:100vw"></textarea>
                </p>
                <p>
                    <label>Basic Qualitfications</label>
                    <textarea name="qualification" id="qualification" style="width: 400px; height: 100px;max-width:100vw"></textarea>
                </p>
                <p>
                    <label>Professional Skill Requirements</label>
                    <textarea name="skills" id="skills" style="width: 400px; height: 100px;max-width:100vw"></textarea>
                </p>
                </fieldset>
            <fieldset class="row1">
                <legend>Additional Details</legend>
                <p>
                    <label>Positions</label>
                    <input name="positions" id="positions" type="text"/>
                </p>
                <p>
                    <label>Salary</label>
                    <input name="salary" id="salary" type="text"/>
                </p>
                </center>
            </fieldset>
            <div class="col-sm-12"><center><button name="submit" id="submit" class="button">Post Job &raquo;</button></center></div></form>		
        </div><!-- end #Wrapper -->
		<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>	
		</div><!-- end #footer -->
    </body>
</html>
<?php } }?>