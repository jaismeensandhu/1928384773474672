<html>
<body>
<?php
    include_once("dbconnection.php");
    $fullName=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $contact=$_REQUEST['contactNumber'];
    $country=$_REQUEST['country'];
    $expectedSalary=$_REQUEST['expectedSalary'];
    $experience=$_REQUEST['experience'];
    $coverLetter=$_REQUEST['coverLetter'];
    $fkJobId=$_REQUEST['jobId'];
    $resumeName=$_FILES['resume']['name'];  
    $resumeTempName=$_FILES['resume']['tmp_name'];
    $resumeRandom=rand(1,100);
    $resumeN=$resumeName."_".$resumeRandom;
    if((!empty($resumeName)) && (!empty($fullName)) && ((!empty($email)) || (!empty($contact))))
    {      
        $location = 'resumes/';      
        if(move_uploaded_file($resumeTempName, $location.$resumeN))
        {
                    $query="insert into jobapplications(name,email,contact,country,expectedSalary,experience,coverLetter,resume,fkJobId)values('".$fullName."','".$email."','".$contact."','".$country."','".$expectedSalary."','".$experience."','".$coverLetter."','".$resumeN."','".$fkJobId."')";
                    $exe=mysqli_query($bd,$query);
                    if($exe==1)
                    {
                        //header("location:apply_jobs.php");
                        echo '<script language="javascript">';
                        echo 'alert("Thanks for applying! We are reviewing your profile and will get back to you soon.");';
                        echo 'window.location.href="apply_jobs.php";';
                        echo '</script>';
                        
                    } 
                }       
        }  
    else 
    {
        //header("location:apply_jobs.php");
        echo '<script language="javascript">';
        echo 'alert("Unable to submit your application, Please provide required information or Contact us @ mentorHR@mentortechsource.com");';
       // echo 'window.location.href="careers.php";';
        echo '</script>';
        
        
    }
?>
</body>
</html>