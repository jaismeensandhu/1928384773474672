<html>
<body>
<?php
    include_once("dbconnection.php");
    define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__.'/src/Facebook/');
    require_once(__DIR__.'/src/Facebook/autoload.php');
    $title=$_REQUEST['title'];
    $type=$_REQUEST['type'];
    $location=$_REQUEST['location'];
    if(empty($location))
    {
        $location="Not Applicable";
    }
    $experience=$_REQUEST['experience'];
    if(empty($experience))
    {
        $experience="Not Applicable";
    }  
    $description=$_REQUEST['description'];
    $qualification=$_REQUEST['qualification'];
    $skills=$_REQUEST['skills'];
    $salary=$_REQUEST['salary'];
    $positions=$_REQUEST['positions'];
    $jobId=$_REQUEST['jobId'];
    if((!empty($title)) && (!empty($type)) && (!empty($description)))
    {   
        $query="update jobs set title='".$title."',jobtype='".$type."',location='".$location."',experience='".$experience."',description='".$description."',qualification='".$qualification."',skills='".$skills."',salary='".$salary."',positions='".$positions."' where jobId='".$_REQUEST["jobId"]."'";
        $exe=mysqli_query($bd,$query);
        if($exe==1)
        {
            // Post to facebook
            $fb = new Facebook\Facebook([
            'app_id' => '351232165259255',
            'app_secret' => 'd9b33e6a6cbc1c21315d8d05e2f33ad2',
            'default_graph_version' => 'v2.8',
            ]);
            $jdescription = strip_tags($description, '');
            //Post property to Facebook
            $linkData = [
            'link' => 'www.mentortechsource.com/viewJob.php?ID='.$jobId,
            'message' => "New Job Posting on MentorTechSource Careers \n\n Title: ".$title."\n Jobtype: ".$type."\n Job Description: ".$jdescription."\n \n TO APPLY Visit our website or Click the link below >>"
            ];
            $pageAccessToken ='EAAEZCcZAxxpZCcBANCFI013vH86A0hATgBIZCEsgEFbtsoZAHzb2QwSzkDXsQSMmcPQoz9OBWzE1jSZAVY7WhdOmKSaqQResZCLI1YyZCDUbOHZCykE7a3cG3ApZB3me7SfLpZCFO3yaQXVxTPurdbOfGgrfjTYAiP3VDg4mTsXW8pglQZDZD';

            try {
            $response = $fb->post('/me/feed', $linkData, $pageAccessToken);
            } catch(Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: '.$e->getMessage();
            exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: '.$e->getMessage();
            exit;
            }
            $graphNode = $response->getGraphNode();


            echo '<script language="javascript">';
            echo 'alert("Job is updated on the portal.");';
            echo 'window.location.href="listJobs.php";';
            echo '</script>';            
        }
        else 
        {
            $jobId=$_REQUEST['jobId'];
            echo '<script language="javascript">';
            echo 'alert("Unable to update this job, Please provide required information.");';
            echo 'window.location.href="updateJob.php?jobId='.$jobId.'";';
            echo '</script>';   
        } 
    }         
    else 
    {
        $jobId=$_REQUEST['jobId'];
        echo '<script language="javascript">';
        echo 'alert("Unable to update this job, Please provide required information.");';
        echo 'window.location.href="updateJob.php?jobId='.$jobId.'";';
        echo '</script>';
        
        
    }
?>
</body>
</html>