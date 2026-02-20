<?php
session_start();
include "db.php";

$user=$_POST['username'];
$pass=$_POST['password'];

$q=mysqli_query($conn,"SELECT * FROM admin_users WHERE username='$user' AND password='$pass'");

if(mysqli_num_rows($q)==1){
    $_SESSION['admin']=$user;
    header("Location: admin_dashboard.php");
}else{
    echo "Invalid Login";
}
?>