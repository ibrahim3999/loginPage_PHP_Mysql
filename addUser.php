
  <form action="" method="post">
  <h2>New Account</h2>

  <?php 
  if(isset($_GET['error']))
  {
   ?> 
      <p class="error"><?php echo $_GET['error'];?></p>
    <?php } ?>
    <label for=""> id </label>
  <input type="text" name="id" placeholder="id"><br>
    <label for=""> Name</label>
  <input type="text" name="name" placeholder="name Name"><br>
  <label for="">User Name</label>
  <input type="text" name="uname" placeholder="User Name"><br>
  <label for="">Password</label>
  <input type="Password" name="Password" placeholder="Password"><br>
  <button id="login" type="submit">Create</button>

    </p>
</form>
