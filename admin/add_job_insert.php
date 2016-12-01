<html>
<body>
<?php
    include_once("dbconnection.php");
    $title=$_REQUEST['title'];
    $type=$_REQUEST['type'];
    $location=$_REQUEST['location'];
    $experience=$_REQUEST['experience'];  
    $description=$_REQUEST['description'];
    $qualification=$_REQUEST['qualification'];
    $skills=$_REQUEST['skills'];
    $salary=$_REQUEST['salary'];
    $positions=$_REQUEST['positions'];
    $startDate=$_REQUEST['startDate'];
    $endDate=$_REQUEST['endDate'];
    if((!empty($title)) && (!empty($type)) && (!empty($description)))
    {      
        $query="insert into jobs(title,jobtype,location,experience,description,qualification,skills,salary,positions,startDate,endDate)values('".$title."','".$type."','".$location."','".$experience."','".$description."','".$qualification."','".$skills."','".$salary."','".$positions."','".$startDate."','".$endDate."')";
        $exe=mysqli_query($bd,$query);
        if($exe==1)
        {
            echo '<script language="javascript">';
            echo 'alert("Job is posted on the portal.");';
            echo 'window.location.href="addJob.php";';
            echo '</script>';            
        } 
    }         
    else 
    {
        echo '<script language="javascript">';
        echo 'alert("Unable to post this job, Please provide required information.");';
        echo 'window.location.href="addJob.php";';
        echo '</script>';
        
        
    }
?>
</body>
</html>