<?php
    session_start();
    $SESSION;

    include("db.php");
    include("../login/functions.php");
    $user_data = checkLogin($connection);



    
    try{
        $query = "INSERT INTO performance(USN,marks,Subject) values ('" . $user_data['USN'] . "' , ' " . $_SESSION['score'] . " ', 'Computer');";
        mysqli_query($connection,$query);
        unset($_SESSION['score']);
    }   
    catch(exception $e){
        echo "Cannot upadate this score since your userID has already taken this test!
        <br>You Can take the test only once! ";
    } 
    //INSERT INTO performance(USN,marks,Subject) values ('$user_data['USN']' , '$_SESSION['score'] ', ' ComputerScience ')
?>



