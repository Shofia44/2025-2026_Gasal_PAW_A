<?php
session_start();
if(isset($_SESSION['username'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Modul 8</title>
    <style>
        body { font-family: Arial; background:#f2f2f2; }
        .login-box{
            width:300px; margin:80px auto; padding:30px;
            background:white; border-radius:8px;
        }
        input{ width:100%; padding:10px; margin:5px 0; }
        button{ width:100%; padding:10px; background:blue; color:white; border:none; }
    </style>
</head>
<body>

<div class="login-box">
    <h3>Login</h3>

    <?php if(isset($_GET['msg'])) echo "<p style='color:red'>".$_GET['msg']."</p>"; ?>

    <form action="proses_login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">LOGIN</button>
    </form>
</div>

</body>
</html>
