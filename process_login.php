<?php
session_start();
require_once 'dbh.inc.php';



if (isset($_POST['Submit'])) {

    $email =($_POST['email']);
    $password= sha1($_POST['password']);
  try{

    $loginQuery = "SELECT * FROM `users` WHERE `email` ='$email' AND `password` = '$password' ";
    $result = $conn->query($loginQuery);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
            $_SESSION['email'] = $row['email'];
             header('Location: display.php');
    }

    else{
        header("Location: index.php?message=<div class='alert alert-danger'><i class='fa fa-warning'></i> email and password do not match try again later</div>");
    }

}

    catch (PDOException $e){

        print "Error!: " . $e->getMessage() ."<br/>";

        die();

    }



}





?>
