<?php session_start();
    ob_start();
    $servername = "localhost";
	//$database = "Lowongan";
	$username = "root";
	$password = "Kelima354[]";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect("$servername", "$username", "$password") or die(mysqli_connect_error($conn));
mysqli_select_db($conn,"Lowongan") or die("tidak ada databases");
    $username = $_POST['username'];
    $pass     = $_POST['password'];

    $sql="SELECT * FROM login WHERE username='$username' AND password='$pass'";
    $result=mysqli_query($conn,$sql)or die('ga bisa terhubung ke databases;'.mysqli_error($conn));
    $rows = mysqli_num_rows($result);
    //$r=mysqli_fetch_array($login);

    if ($rows==1) {

        $_SESSION['username'] = $username;
	    header('location:admin/admin-beranda.php');
    }else{
    	?><script>alert("Login gagal!");document.location.href="admin.php"</script>
    	<?php
    	echo mysql_error();
    }
    ?>