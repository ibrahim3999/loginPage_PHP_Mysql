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
if(empty($uname) || empty($pass))
    {
        echo"At least one of your details is wrong";
        exit();
    }
    else{
         header("Location: open.php");
       // require_once('db_con.php');
      //  $sql="SELECT * FROM users where user_name='$uname' and password='$pass'";
        // $res=mysqli_query($con,$sql);
        exit();
    }
}
