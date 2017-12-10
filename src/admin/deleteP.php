<?php
	include ('header.php');
	include ('sidebar-admin.php');
?>
	<?php
		if (isset($_GET['id_job'])) {
			$host="localhost";
			$username="root";
			$password="Kelima354[]";
			$db="Lowongan";

			$connect=new mysqli($host,$username,$password,$db);

			$id_perusahaan = $_GET['id_perusahaan'];
			//$nama_pekerjaan = $_GET['nama_pekerjaan'];
		
		//$sql="DELETE from lowongan where id_job='$id_job'"
			$delete = mysqli_query($connect,'DELETE from perusahaan where id_perusahaan="'.$id_perusahaan.'"');

			if ($delete){
	//header ('location:view.php');
				echo " Data Sudah Terapus";
				mysqli_close($connect);
			} else { 
				echo "Data gagal dihapus";
				mysqli_close($connect);
			}
		}
	?>
<p><a href="LP.php">lihat data</a></p>
<?php include 'footer.php' ?>