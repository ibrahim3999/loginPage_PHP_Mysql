<?php
if(isset($_POST['uname']) && isset($_POST['Password']) )
{
   
    function validata($data)
    {   $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $unameInput = validata($_POST['uname']);
    $passInput =     validata($_POST['Password']);
    $sname="localhost";
        $uname="root";
        $password="";
        $db_name="login";
    
   if(empty($unameInput) && empty($passInput))
   {
    ?>
    <p><?php echo " Please enter your Username and Password";?></p>
    <?php
    exit();
    }
    else if(empty($unameInput) )
    {
        echo"Please enter Username";
        exit();
    }
    else if(empty($passInput))
    {
        echo" Please enter password";
        exit();
    }
    else{

        require('db_con.php');
        $db=new db_con($sname,$uname,$password,$db_name);
        if ($db->chenkLogin($unameInput,$passInput)==true)
        {
            header('Location: open.php');
        }

        /*if( $db->chenkLogin($unameInput,$passInput)==true)
        {
            header('Location : open.php');
        }
        */
       
       /* select * from users
        $sname="localhost";
        $uname="root";
        $password="";
        $db_name="login";
       $db=new db_con($sname,$uname,$password,$db_name);
       $conn = $db->ConnDB();
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }
       $sql = "SELECT * FROM users";
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
        */
        
    }
}

?>