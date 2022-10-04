<?php
class user{
    public $id;
    public $name ;
    public $user_name;
    private $password;
    function __construct($id,$name,$user_name,$password)
    {
       $this->id= $id;
       $this->name= $name;
       $this->user_name= $user_name;
       $this->password= $password;
    }
    function  addUser($id,$name,$user_name,$password)
    {
        
    }
    function get_Pass()
    {
        return $this->password;
    }
    function set_name($name)
    {
        $this->name=$name;
    }
    function user_name($user_name)
    {
        $this->user_name=$user_name;
    }
    function password($password)
    {
        $this->password=$password;
    }
}
?>