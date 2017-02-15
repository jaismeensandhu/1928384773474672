    <div class="modal-header">
	    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
		<a class="close-reveal-modal" aria-label="Close">&#215;</a>
		<b class="col-sm-1"><a href="careers.php"><button class="btn btn-primary">&lt; Back</button></a></b>
		<center><h3 class="modal-title col-sm-11">Job Description</h3></center>
    </div>
    <div class="modal-body">
    	<center><table class="table" style="font-size:1em;border:none;">
			<?php
				include_once("dbconnection.php");
					//if (isset($_GET['applicationId'])){
                    $jobId=$_GET['ID'];
					$rquery="SELECT * FROM jobs where jobId =  '" .$jobId. "' ";
					$rresults = mysqli_query($bd,$rquery);
					$row = mysqli_fetch_assoc($rresults);
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
					<td><?php echo nl2br($row['description'])?></td>
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
					<td colspan="2">
						<?php print '<center><a href="apply_jobs.php?jobId='.$row['jobId'].'"><button type="button" class="btn btn-primary">Apply Now</button></a></center>'; ?>		
					</td>
				</tr>
				</tbody>
				</table></center>  
    </div>