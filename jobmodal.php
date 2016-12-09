    <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal">&times;</button>
		<h3 class="modal-title">Job Description</h3>
    </div>
    <div class="modal-body">
    	<center><table class = "table" style="font-family:serif;font-size:1em;">
			<?php
				include_once("dbconnection.php");
					//if (isset($_GET['applicationId'])){
                    $jobId=$_GET['ID'];
					$rquery="SELECT * FROM jobs where jobId =  '" .$jobId. "' ";
					$rresults = mysqli_query($bd,$rquery);
					$row = mysqli_fetch_assoc($rresults);
	        ?>
            <tbody>
				<tr>
					<td><strong>Job ID</strong> </td>
					<td><?php echo $row['jobId']?></td>
				</tr>
				<tr>
					<td><strong>Title</strong> </td>
					<td><?php echo $row['title']?></td>
				</tr>
				<tr>
					<td><strong>Job Type</strong> </td>
					<td><?php echo $row['jobtype']?></td>
				</tr>
				<tr>
					<td><strong>Posted On</strong> </td>
					<td><?php echo $row['startDate']?></td>
				</tr>
				<tr>   
					<td><strong>Location</strong></td>
					<td><?php echo $row['location']?></td>
				</tr>
				<tr>        
					<td><strong>Experience</strong> </td>
					<td><?php echo $row['experience']?></td>
				</tr>
				<tr>
					<td><strong>Description</strong> </td>
					<td><?php echo nl2br($row['description'])?></td>
				</tr>
				<tr>
					<td><strong>Qualifications</strong></td>
					<td><?php echo nl2br($row['qualification'])?></td>
				</tr>
				<tr>   
					<td><strong>Skills</strong></td>
					<td><?php echo  nl2br($row['skills'])?></td>
				</tr>
				</tbody>
				</table></center>  
    </div>