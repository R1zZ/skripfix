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


	$id_job					=$_POST['id_job'];
	$id_perusahaan			=$_POST['id_perusahaan'];
	$nama_pekerjaan			=$_POST['nama_pekerjaan'];
	$usia					=$_POST['usia'];
	$pengalaman				=$_POST['pengalaman_dibidang'];
	$jk						=$_POST['jk'];
	$pendidikan_min			=$_POST['pendidikan_min'];
	$ipk_min				=$_POST['ipk_min'];
	$spesifikasi_lain		=$_POST['spesifikasi_lain'];
	$qty					=$_POST['qty'];
	$batas_lowongan			=$_POST['batas_lowongan'];

	//echo $NIM.$nama_mhs.$alamat.$no_tlp.$email.$nama_jurusan.$IPK.$TTL.$th_lulus.$minat_bidang.$JK;
	$input="INSERT INTO lowongan VALUES ('$id_job','$id_perusahaan','$nama_pekerjaan','$usia','$pengalaman','$jk','$pendidikan_min','$ipk_min','$spesifikasi_lain','$qty','$batas_lowongan')";
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
	  <b><a href="IL.php">Isikan data kembali</a></b>
	</div>
</body>
</html>

<?php 
include('footer.php'); 
?>