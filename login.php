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
   if(empty($uname) && empty($pass))
   {
    ?>
    <p><?php $result="Please enter Username and Password";?></p>
    <?php
    exit();
    }
    else if(empty($uname) )
    {
        echo"Please enter Username";
        exit();
    }
    else if(empty($pass))
    {
        echo"Please enter password";
        exit();
    }
    else{

       require('db_con.php');
        $sname="localhost";
        $uname="root";
        $password="";
        $db_name="users";
       $db=new db_con($sname,$uname,$password,$db_name);
       $conn = $db->ConnDB();
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }
       
       $sql = "SELECT * FROM users.all_user";
       $result = mysqli_query($conn, $sql);
       if (mysqli_num_rows($result) > 0) {
          
           while($row = mysqli_fetch_assoc($result)) {
               echo " <br> id: " .$row['id']. "<br>  name: ".$row['name'] ."<br> user_name: ".$row['user_name']."<br> password: ".$row['password'];
             //  $password=$row['password'];
               //$user_name=$row['user_name'];
           }
       } else {
           echo "0 results";
       }
    
       mysqli_close($conn);
       // header("Location: open.php");
        exit();
    }
}

?>