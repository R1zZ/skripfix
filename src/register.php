<?php
	include('login.php'); // Memasuk-kan skrip Login 
 
if(isset($_SESSION['login_user'])){
header("location: menu1.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Untuk CSS ditaruh pada file style.css, sehingga perlu dipanggil code ini -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="login">
        <h3>Register</h3>
        <fieldset>
            <form action="" method="post">
                <input type="text" name="username" placeholder="Username" size="20">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Login" id="InputLogin">
                <div class="border-p"></div>
            </form>
        </fieldset>
    </div>
</body>
</html>
