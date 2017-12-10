<?php 
	$host="127.0.0.1";
	$username="root";
	$password="";
	$db="Lowongan";

	$connect=mysql_connect($host,$username,$password);
	$find=mysql_select_db($db);

if ($_POST['Submit']=="Submit") {
	$id_persh=$_POST['id_persh'];
	$nama_persh=$_POST['nama_persh'];
	$almt=$_POST['almt'];
	$no_tlp=$_POST['no_tlp'];
	$email=$_POST['email'];

//	echo $id_persh.$nama_persh.$almt.$no_tlp.$email;
	$input="INSERT INTO perusahaan(id_persh,nama_persh,almt,no_tlp,email)VALUES('$id_persh','$nama_persh','$almt','$no_tlp','$email')";
			$query_input=mysql_query($input);

			if ($query_input) {
				echo "Data Berhasil dimasukan";
				mysql_close($connect);
			}
			else{
				echo "Data gagal diinput";
				mysql_close($connect);
			}
	}

?>
<!DOCTYPE html>
<html>
	<head>
	  <title>Akakom Career Center</title>
	  <link href="style.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div>
	  <b><a href="../menu.php">Isikan data kembali</a></b>
	</div>
</body>
</html>