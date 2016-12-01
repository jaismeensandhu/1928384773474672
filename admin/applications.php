
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
		        <div id="search">
		            <?php
                        include("includes/search.inc.php");
                    ?>
		        </div>
		        <!-- end #search -->
	        </div><!-- end #header -->
        </div><!-- end #header-wrapper -->
        <div id="logo">
            <?php
                include("includes/logo.inc.php");
            ?>
	    </div>
        <div id="wrapper">
            <div id="page">
                <div id="page-bgtop">
                    <hr/><!-- end #logo -->
                    <div id="content">
                        <div class="post">   
                            <h2 class="title"><center><font color ="red" ><b>Job Applications</b></center></font></a></h2>
                            <p class="meta"></p>
                            <div class="entry"></div>
                        </div>
                    </div><!-- end #content -->
                    <div id="sidebar">
                        <div style="clear: both;">&nbsp;</div>
                    </div><!-- end #sidebar -->
                </div>
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