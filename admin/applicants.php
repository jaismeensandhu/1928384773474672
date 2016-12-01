	    		<div>
	    			<center><h1> Positions Available </h1></center>
	    		</div>
	    		<div>
					<table class = "table">
<thead>
    <tr>
        <td><center><strong>Job Title</strong></center> </td>
        <td><center><strong>Applicant Name</strong></center> </td>
        <td><center><strong>Contact Number</strong></center> </td>
        <td><center><strong>Email ID</strong> </center></td>
        <td><center><strong>Experience</strong> </center></td>
        <td><center><strong>Expected Salary</strong></center></td>
    </tr>
</thead>
<tbody>
<?php
    include_once("dbconnection.php");
    $query="SELECT * FROM jobapplications INNER JOIN jobs ON jobapplications.jobId=jobs.fkJobId";


    $results = mysqli_query($bd,$query);
    $a = 0;

    while($row = mysqli_fetch_assoc($results)) {
      $a++;
      echo '<script type = "text/javascript">c++;</script>'
    ?>
        <tr>
            <td><center><?php echo $row['jobId']?></center></td>
            <td><center><?php echo $row['title']?></center></td>
            <td><center><?php echo $row['jobtype']?></center></td>
            <td><center><?php echo $row['experience']?></center></td>
            
            <td>
			<?php
			 print '<center><a href="apply_jobs.php?jobId='.$row['jobId'].'">Apply</a></center>';  
			 ?>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table
        		</div>

