<?php
    session_start();
    include("../login/functions.php");
    include("../login/connection.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_SESSION['password'] = $_POST['password'];

      if(!empty($_SESSION['password'])){
              if($_SESSION['password'] === 'adminlogin'){
                header("Location: add.php");
                die; 
              }
            echo "Wrong Password";
      }
      else{
        echo "Please do not leave any field empty! ";
      }
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Admin Access</h1>
        <h2>Enter the password(Shared with admins only)</h2>
        Password : <input type="password" name="password"><br>
        <input type="submit" value="Login"><br>

    </form>

</body>
</html>