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
			<div id="page">
				<div id="page-bgtop col-sm-12 col-lg-12">
						<div id="content col-sm-12 col-lg-12">
							<div class="post col-sm-12 col-lg-12">
								<h2 class="title"><center><font color ="red" ><b>Mentor Tech Source Job Portal</b></center></font></a></h2>
									<?php
										include("applicants.php");
									?>
								<div class="entry"></div>
							</div>
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
<?php } ?>