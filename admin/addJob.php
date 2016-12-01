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
                    <input name="type" id="type" type="text"/>
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
            <fieldset class="row1">
                <legend>Job Details</legend>
            <center>    <p>
                    <label>Job Description *</label>
                    <textarea name="description" id="description"></textarea>
                </p>
                <p>
                    <label>Basic Qualitfications</label>
                    <textarea name="qualification" id="qualification"></textarea>
                </p>
                <p>
                    <label>Professional Skill Requirements</label>
                    <textarea name="skills" id="skills"></textarea>
                </p>
                <p>
                    <label>Positions</label>
                    <input name="positions" id="positions" type="text"/>
                </p>
                <p>
                    <label>Salary</label>
                    <input name="salary" id="salary" type="text"/>
                </p>
                <p>
                    <label>Starting Date</label>
                    <input name="startDate" id="startDate" type="date"/>
                </p>
                <p>
                    <label>Ending Date</label>
                    <input name="endDate" id="endDate" type="date"/>
                </p></center>
            </fieldset>
            <div class="col-sm-12"><button name="submit" id="submit" class="button">Post Job &raquo;</button></div></form>		
        </div><!-- end #Wrapper -->
		<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>	
		</div><!-- end #footer -->
    </body>
</html>
<?php } ?>