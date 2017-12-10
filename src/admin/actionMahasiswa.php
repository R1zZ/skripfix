<?php 
include('header.php');
include ('sidebar-admin.php');

if (isset($_POST['Submit'])) {
	$host="localhost";
	$username="root";
	$password="Kelima354[]";
	$db="Lowongan";

	$connect=new mysqli($host,$username,$password,$db);
	//$find=mysqli_select_db($db);


	$NIM			=$_POST['NIM'];
	$nama_mhs		=$_POST['nama_mhs'];
	$alamat			=$_POST['alamat'];
	$no_tlp			=$_POST['no_tlp'];
	$email			=$_POST['email'];
	$nama_jurusan	=$_POST['nama_jurusan'];
	$IPK			=$_POST['IPK'];
	$TTL 			=$_POST['TTL'];
	$th_lulus		=$_POST['th_lulus'];
	$minat_bidang	=$_POST['minat_bidang'];
	$JK				=$_POST['JK'];

	//echo $NIM.$nama_mhs.$alamat.$no_tlp.$email.$nama_jurusan.$IPK.$TTL.$th_lulus.$minat_bidang.$JK;
	$input="INSERT INTO mahasiswa VALUES ('$NIM','$nama_mhs','$alamat','$no_tlp','$email','$nama_jurusan','$IPK','$TTL','$th_lulus','$minat_bidang','$JK')";
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
	  <b><a href="IM.php">Isikan data kembali</a></b>
	</div>
</body>
</html>

<?php 
include('footer.php'); 
?>