<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        body{
            background:#1690A7;
            display:flex;
            justify-content: center;
            align-items:center;
            height:100vh;
        }
        *{
           font-family:sans-serif;
           box-sizing: border-box;
        }
        h2{
            text-align:center;
            margin-bottom:40px;
        }
        form{
            border:2px solid #ccc;
            padding:30px;
            background:#fff;
            width:500px;
            border-radius: 15px;
        }
        input{
            display:block;
            border :2px solid #ccc;
            width:95%;
            padding:10px;
            margin:10px auto;
            border-radius:5px;
        }
        label{
            color:#888;
            font-size:18px;
            padding:10px;
            
        }
        #login{
            float:right;
            background:#555;
            padding :10px 15px;
            color:#fff;
            border-radius:5px;
            margin-right:10px;
            border: none;
        }
        #login:hover{
            opacity:.7;
        }
        #newUser{
            float:right;
            background:#555;
            padding :10px 15px;
            color:#fff;
            border-radius:5px;
            margin-right:10px;
            border: none;
        }
        #newUser:hover{
            opacity:.7;
        }
        .error{
            background: #f2dede;
            color:#A94442;
            padding:10px;
            width:95%;
            border-radius:5;
        }
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
 
        <?php 
        if(isset($_GET['error']))
        {
         ?> 
            <p class="error"><?php echo $_GET['error'];?></p>
          <?php } ?>
        <label for="">User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label for="">Password</label>
        <input type="Password" name="Password" placeholder="Password"><br>
        <button id="login" type="submit">Login</button>
         </p>
         <p><?php  require('login.php');
          ?>
          </p>
    </form>
</body>
</html>