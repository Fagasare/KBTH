<?php
            include_once 'dbh.inc.php';

            if (isset($_POST['Save'])) {
            $full_name = $_POST['full_name'];
            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            $password_2 = sha1($_POST['password_2']);
            $area_name = $_POST['area_name'];
            $gps_location = $_POST['gps_location'];
            $department = $_POST['department'];
            $school = $_POST['school'];
            $phone = $_POST['phone'];
            $location_1 = $_POST['location_1'];

            if ($password != $password_2) {
                  header("Location: register.php?message=<div class='alert alert-danger'><i class='fa fa-warning'></i> Password and Confirm Password do not match try again!!!</div>");

            }
            else{


            $sql = "INSERT INTO users(full_name,email,password,area_name,gps_location,department,school,phone,location_1) VALUES ('$full_name','$email','$password','$area_name','$gps_location','$department','$school','$phone','$location_1');";
            $result = mysqli_query($conn,$sql);

            header("Location: index.php?message=<div class='alert alert-success'><i class='fa fa-check'></i> Registration successfully  please login </div>");
      }
}
?>
