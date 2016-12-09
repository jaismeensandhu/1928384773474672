	    		<div>
	    			<center><h1> Positions Available </h1></center>
	    		</div>
	    		<div>
					<table class = "table">
<thead>
    <tr>
        <td><center><strong>Application ID</strong></center> </td>
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
    $query="SELECT * FROM jobapplications ORDER BY submissionDate DESC";
    $results = mysqli_query($bd,$query);
    $a = 0;
    while($row = mysqli_fetch_assoc($results)) {
      $a++;
      echo '<script type = "text/javascript">c++;</script>'
    ?>
        <tr>
            
            <td><center><?php
			 print '<center><a href="applications.php?applicationId='.$row['applicationId'].'">'.$row['applicationId'].'</a></center>';  
			 ?></center></td>
             <td><center><?php echo $row['name']?></center></td>
            <td><center><?php echo $row['contact']?></center></td>
            <td><center><?php echo $row['email']?></center></td>
            <td><center><?php echo $row['experience']?></center></td>
            <td><center><?php echo $row['expectedSalary']?></center></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table
        		</div>

