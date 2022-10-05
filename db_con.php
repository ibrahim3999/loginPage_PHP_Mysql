<?php
class db_con{
private $sname;
private $uname;
private $password;
private $db_name;
function __construct($sname,$uname,$password,$db_name) 
{
$this->sname=$sname;
$this->uname=$uname;
$this->password=$password;
$this->db_name=$db_name;
}
function ConnDB()
{
    return  mysqli_connect($this->sname,$this->uname,$this->password,$this->db_name);
}
function  addUser($id,$name,$user_name,$password)
{ 
    $con=$this->ConnDB();
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO `users`(`id`, `user_name`, `password`, `name`) VALUES ('$id','$name','$password','$user_name')";
    $result = mysqli_query($con, $sql);

    return $result;

}
 function chenkLogin($uname,$pass)
 {
    $sql = "SELECT * FROM users";
    $result = mysqli_query($this->ConnDB(), $sql);
    if (mysqli_num_rows($result) > 0) {
       
        while($row = mysqli_fetch_assoc($result)) {
           // echo " <br> id: " .$row['id']. "<br>  name: ".$row['name'] ."<br> user_name: ".$row['user_name']."<br> password: ".$row['password'];
            $password=$row['password'];
            $user_name=$row['user_name'];
            if( $user_name==strval($uname ) && $password==strval($pass))
                return true;
            
        }
    }
    return false;
}
}
/*

$sname="localhost";
$uname="root";
$password="";
$db_name="users";

if(!$con)
    return "ERROR Connection!!!";

return "Connection";
}
function readerAllUsersFromdata()//read All into data structure (user_name and password)
{
    $i=0;
    $USERS=[[]];
    $sname="localhost";
    $uname="root";
    $password="";
    $db_name="users";
    $conn=mysqli_connect($sname,$uname,$password,$db_name);
     if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }
       
       $sql = "SELECT * FROM users.all_user";
       $result = mysqli_query($conn, $sql);
       
       if (mysqli_num_rows($result) > 0) {
          
           while($row = mysqli_fetch_assoc($result)) {
               //echo " <br> id: " .$row['id']. "<br>  name: ".$row['name'] ."<br> user_name: ".$row['user_name']."<br> password: ".$row['password'];
               $USERS[$i][1]=$row['password'];
               $USERS[$i][0]=$row['user_name'];
               $i++;
           }
       } else {
           echo "0 results";
       }
        
        $USERS[0][0]="ibrahim";
       mysqli_close($conn);
       return $USERS;
}
$isCon=readerAllUsersFromdata();
$Users=ConnDB();
*/
