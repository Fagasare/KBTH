<?php
session_start();

if(!isset($_SESSION['email']) || (trim($_SESSION['email']) == '' )){
header("location:display.php");
exit();
}
$session_email=$_SESSION['email']
?>
