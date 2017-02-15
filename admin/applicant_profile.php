
	    		<div>
<center>
	<table class="table">
<?php
    include_once("dbconnection.php");
     //if (isset($_GET['applicationId'])){ 
    $appId = $_GET['applicationId'];
    $query="SELECT * FROM jobapplications where applicationId =  '" .$appId. "' ";
    $results = mysqli_query($bd,$query);
    $row = mysqli_fetch_assoc($results)
    ?>
<tbody>
    <tr>
        <td><strong>Application ID</strong> </td>
        <td><?php echo $row['applicationId']?></td>
    </tr>
    <tr>
        <td><strong>Applicant Name</strong> </td>
        <td><?php echo $row['name']?></td>
    </tr>
    <tr>
        <td><strong>Country</strong> </td>
        <td><?php echo $row['country']?></td>
    </tr>
    <tr>   
        <td><strong>Contact Number</strong></td>
        <td><?php echo $row['contact']?></td>
    </tr>
    <tr>        
        <td><strong>Email ID</strong> </td>
        <td><?php echo $row['email']?></td>
    </tr>
    <tr>
        <td><strong>Experience</strong> </td>
        <td><?php echo $row['experience']?></td>
    </tr>
    <tr>
        <td><strong>Expected Salary</strong></td>
        <td><?php echo $row['expectedSalary']?></td>
    </tr>
    <tr>   
        <td><strong>Submitted On</strong></td>
        <td><?php echo date("F j, Y ", strtotime($row['submissionDate']))?></td>
    </tr>
    <tr>   
        <td><strong>Cover Letter</strong></td>
        <td><?php echo  nl2br($row['coverLetter'])?></td>
    </tr>
    
    <tr>   
        <td><strong>Resume</strong></td>
        <td><a href="download.php?link=<?php echo $row['resume'];?>" target="_blank"><?php echo $row['resume']?></a></td>
    </tr>
    </tbody>
    </table></center>
</div>

    