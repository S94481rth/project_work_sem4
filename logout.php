<?php
    if(isset($_SESSION['password'])){
        unset($_SESSION['password']);
    }
    header("Location: verify.php");
    die;    
?>
