<html>
    <body>
        <?php
            include_once("dbconnection.php");
            $name=$_REQUEST['name'];
            $username=$_REQUEST['username'];
            $password=$_REQUEST['password'];
            $permission=$_REQUEST['permission'];
            $sel="select * from login where user_name='".$username."'";
            $exe=mysqli_query($bd,$sel);
            $arr=mysqli_fetch_array($exe);
            if($arr['user_name']==$username)
            {
                header('Location:createUser.php?a=1');
            }
            else
            {
                $query="insert into login(name,user_name,password,permission)values('".$name."','".$username."','".$password."','".$permission."')";
                mysqli_query($bd,$query);
                header('location:listUsers.php');
            }
        ?>
    </body>
</html>
