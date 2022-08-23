<?php
if(isset($_POST['uname']) && isset($_POST['Password']) )
{
   
    function validata($data)
    {   $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
$uname = validata($_POST['uname']);
$pass =     validata($_POST['Password']);
if(empty($uname))
    {
    header("Location: index.php?error=User Name is required");
    exit();
    }
    else if(empty($pass)){
    header("Location: index.php?error=Password is required");
    exit();
    }
    else{
        require_once('db_con.php');
      //  $sql="SELECT * FROM users where user_name='$uname' and password='$pass'";
        // $res=mysqli_query($con,$sql);
    }
}
else{
    header("Location: index.php");
    exit();
}