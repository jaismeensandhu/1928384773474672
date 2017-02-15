
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
	    		<center><h3>Job Description</h3></center>
			</div>
			<div>
				<center><table class="table table-striped" style="font-size:1.1em;border:1px solid #D3D3D3;width:auto;margin:1% 2% 1% 2%;">
					<?php
						include_once("dbconnection.php");
							//if (isset($_GET['applicationId'])){
							$jobId=$_GET['ID'];
							$rquery="SELECT * FROM jobs where jobId =  '" .$jobId. "' ";
							$rresults = mysqli_query($bd,$rquery);
							$row = mysqli_fetch_assoc($rresults);
							$desciption = nl2br($row['description']);
							$company="<br><br><b>Why Mentor Tech Source?</b> <br><br><p style='line-height:140%;'>Mentor Tech Source is the result of 25 plus years of extensive experience in providing Hybrid Model Staffing and Engineering Services in the ever evolving Software Economy.<br>
							<ul>
								<li>We have a unique hybrid contingent staffing service composed of domestic and international sourcing</li>
								<li>We have a 24/7 recruitment cycle due to the fact that Mentor has offices in many different time zones</li>
								<li>We work day and night to provide our consultants and employees with best working environment</li>
							</ul><p>"
					?>
					<tbody>
					<?php 
						if($row['jobId']) 
						{ 
					?>
						<tr>
							<td><strong>Job ID</strong> </td>
							<td><?php echo $row['jobId']?></td>
						</tr>
					<?php 
						} 
						if($row['title']) 
						{ 
					?>
						<tr>
							<td><strong>Title</strong> </td>
							<td><?php echo $row['title']?></td>
						</tr>
					<?php 
						} 
						if($row['jobtype']) 
						{ 
					?>
						<tr>
							<td><strong>Job Type</strong> </td>
							<td><?php echo $row['jobtype']?></td>
						</tr>
					<?php 
						} 
						if($row['addition_date']) 
						{
							$dt = $row['addition_date'];
					?>
						<tr>
							<td><strong>Posted On</strong> </td>
							<td><?php echo date("F j, Y ", strtotime($row["addition_date"])); ?></td>
						</tr>
					<?php 
						} 
						if($row['location']) 
						{ 
					?>
						<tr>   
							<td><strong>Location</strong></td>
							<td><?php echo $row['location']?></td>
						</tr>
					<?php 
						} 
						if($row['experience']) 
						{ 
					?>
						<tr>        
							<td><strong>Experience</strong> </td>
							<td><?php echo $row['experience']?></td>
						</tr>
					<?php 
						} 
						if($row['positions']) 
						{ 
					?>
						<tr>   
							<td><strong>Positions</strong></td>
							<td><?php echo $row['positions']?></td>
						</tr>
					<?php 
						} 
						if($row['salary']) 
						{ 
					?>
						<tr>   
							<td><strong>Salary</strong></td>
							<td><?php echo $row['salary']?></td>
						</tr>
					<?php
						}
						if($row['description']) 
						{ 
					?>
						<tr>
							<td><strong>Description</strong> </td>
							<td><?php echo $desciption.$company?></td>
						</tr>
					<?php 
						}
						if($row['qualification']) 
						{ 
					?>
						<tr>
							<td><strong>Qualifications</strong></td>
							<td><?php echo nl2br($row['qualification'])?></td>
						</tr>
					<?php 
						} 
						if($row['skills']) 
						{ 
					?>
						<tr>   
							<td><strong>Skills</strong></td>
							<td><?php echo  nl2br($row['skills'])?></td>
						</tr>
					<?php } ?>
						<tr>
							<td>
							<a href="listJobs.php"><button class="btn btn-primary">&lt; Back</button></a>
							</td>
							<td>
                            <?php 
                            include_once("dbconnection.php");
                            $sname = $_SESSION['s'];
                            $res = mysqli_fetch_array(mysqli_query($bd,"SELECT permission FROM login WHERE user_name='$sname'"));
                            $permission = array_values($res)[0];
                            if(($permission == 'admin') ||($permission == 'su'))
                            {
							    print '<center><a href="updateJob.php?jobId='.$row['jobId'].'"><button type="button" class="btn btn-primary">Edit Job</button></a></center>'; 
                            }
                            ?>		
							</td>
						</tr>
						</tbody>
						</table></center>  
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