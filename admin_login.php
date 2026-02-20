<?php
session_start();
include "db.php";

if(isset($_POST['login'])){
    $u = $_POST['username'];
    $p = $_POST['password'];

    $check = mysqli_query($conn,"SELECT * FROM admin_users WHERE username='$u' AND password='$p'");

    if(mysqli_num_rows($check)==1){
        $_SESSION['admin'] = $u;
        header("Location: admin_dashboard.php");
    }else{
        $error = "Invalid login details!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<style>
body{
font-family:Segoe UI;
background:#4f46e5;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}
.box{
background:white;
padding:35px;
border-radius:15px;
width:320px;
box-shadow:0 15px 40px rgba(0,0,0,.3);
text-align:center;
}
input{
width:100%;
padding:12px;
margin:10px 0;
border-radius:8px;
border:1px solid #ccc;
}
button{
background:#4f46e5;
color:white;
border:none;
padding:12px;
width:100%;
border-radius:8px;
cursor:pointer;
}
.error{color:red;}
</style>
</head>

<body>

<div class="box">
<h2>Admin Login</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>
</form>

<?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
</div>

</body>
</html>