<html>
<body>
<?php
    include_once("dbconnection.php");
    $fullName=$_REQUEST['fullName'];
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $permission=$_REQUEST['permission'];
    if((!empty($fullName)) && (!empty($username)) && (!empty($password)))
    {   
        $query="update login set password='".$password."',name='".$fullName."',user_name='".$username."',permission='".$permission."' where user_name='".$_REQUEST["user"]."'";
        $exe=mysqli_query($bd,$query);
        if($exe==1)
        {
            echo '<script language="javascript">';
            echo 'alert("User Profile is updated.");';
            echo 'window.location.href="listUsers.php";';
            echo '</script>';            
        }
        else 
        {
            $user=$_REQUEST['user'];
            echo '<script language="javascript">';
            echo 'alert("Unable to update User, Please provide required information.");';
            echo 'window.location.href="editUser.php?user='.$user.'";';
            echo '</script>';   
        } 
    }         
    else 
    {
        $user=$_REQUEST['user'];
        echo '<script language="javascript">';
        echo 'alert("Unable to update this User, Please provide required information.");';
        echo 'window.location.href="editUser.php?user='.$user.'";';
        echo '</script>';
        
        
    }
?>
</body>
</html>