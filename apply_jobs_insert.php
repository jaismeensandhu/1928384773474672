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
    $fkJobId=0;
    if (isset($_REQUEST['jobId']))
    {
        $fkJobId=$_REQUEST['jobId'];
    }
    $resumeName=$_FILES['resume']['name'];  
    $resumeTempName=$_FILES['resume']['tmp_name'];
    $resumeRandom=rand(1,100);
    $resumeN=$resumeRandom."_".$resumeName;
    if((!empty($resumeName)) && (!empty($fullName)) && ((!empty($email)) || (!empty($contact))))
    {      
        $location = 'admin/resumes/';      
        if(move_uploaded_file($resumeTempName, $location.$resumeN))
        {         
                    $query="insert into jobapplications(name,email,contact,country,expectedSalary,experience,coverLetter,resume,fkJobId)values('".$fullName."','".$email."','".$contact."','".$country."','".$expectedSalary."','".$experience."','".$coverLetter."','".$resumeN."','".$fkJobId."')";
                    $exe=mysqli_query($bd,$query);
                    if($exe==1)
                    {
                        // Send Email to Admin Functionality
                        $admin_email = "mentortechsource1@gmail.com";
						$server_email = "MentorHR@Mentortechsource.com";
                        $id = mysqli_insert_id($bd);
						$subject = "Mentor Job Application ID: ".$id;
						$email_message = "Title: ".$subject."\n";
						$email_message .= "Applicant Name: ".$fullName."\n";
						$email_message .= "Email: ".$email."\n";
						$email_message .= "Conatct Number: ".$contact."\n";
						$email_message .= "Cover Letter: ".$coverLetter."\n";
                        $email_message .= "Complete User profile: http://www.mentortechsource.com/admin/applications.php?applicationId=".$id."\n";
						//send email
						mail($admin_email, "$subject", $email_message, "From:" . $server_email);

                        echo '<script language="javascript">';
                        echo 'alert("Thanks for applying! We are reviewing your profile and will get back to you soon.");';            
                        echo 'window.location.href="careers.php";';
                        echo '</script>';    
                    } 
                }       
        }  
    else 
    {
        //header("location:apply_jobs.php");
        echo '<script language="javascript">';
        echo 'alert("Unable to submit your application, Please provide required information or Contact us @ mentorHR@mentortechsource.com");';
        echo 'window.location.href="careers.php";';
        echo '</script>';
        
        
    }
?>
</body>
</html>