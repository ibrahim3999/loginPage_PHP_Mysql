<?php
$sname="localhost";
$uname="root";
$password="";
$db_name="login";
$con=mysqli_connect($sname,$uname,$password,$db_name);
if(!$con)
{
     " ERROR Connection!!! ";
}
else{
    echo "Connection";
}
