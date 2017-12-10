<?php 
include('header.php');
include ('sidebar-admin.php');

if (isset($_POST['Submit'])) {
	$host="127.0.0.1";
	$username="root";
	$password="Kelima354[]";
	$db="Lowongan";

	$connect=new mysqli($host,$username,$password,$db);
	//$find=mysql_select_db();

	$id_perusahaan=$_POST['id_perusahaan'];
	$nama_perusahaan=$_POST['nama_perusahaan'];
	$almt=$_POST['almt'];
	$no_telp=$_POST['no_telp'];
	$email=$_POST['email'];

//	echo $id_persh.$nama_persh.$almt.$no_tlp.$email;
	$input="INSERT INTO perusahaan VALUES('$id_perusahaan','$nama_perusahaan','$almt','$no_telp','$email')";
			$query_input=mysqli_query($connect,$input);

			if ($query_input) {
				echo "Data Berhasil dimasukan";
				mysqli_close($connect);
			}
			else{
				echo "Data gagal diinput";
				mysqli_close($connect);
			}
			$connect->close();
	}

?>
<!DOCTYPE html>
<html>
	<head>
	  <title>Akakom Career Center</title>
	</head>
<body>
	<div>
	  <b><a href="IPsh.php">Isikan data kembali</a></b>
	</div>
</body>
</html>

<?php 
include('footer.php'); 
?>