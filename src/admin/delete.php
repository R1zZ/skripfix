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

			$id_job = $_GET['id_job'];
			$nama_pekerjaan = $_GET['nama_pekerjaan'];
		
		//$sql="DELETE from lowongan where id_job='$id_job'"
			$delete = mysqli_query($connect,'DELETE from lowongan where id_job="'.$id_job.'"');

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
<p><a href="LL.php">lihat data</a></p>
<?php include 'footer.php' ?>