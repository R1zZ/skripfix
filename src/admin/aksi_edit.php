<?php
include('header.php');
include ('sidebar-admin.php');

if(isset($_POST['ubah'])){
  $host="localhost";
  $username="root";
  $password="Kelima354[]";
  $db="Lowongan";

  $connect=new mysqli($host,$username,$password,$db);
  
  	$id_job					=$_POST['id_job'];
	$id_perusahaan			=$_POST['id_perusahaan'];
	$nama_pekerjaan			=$_POST['nama_pekerjaan'];
	$usia					=$_POST['usia'];
	$pengalaman_dibidang	=$_POST['pengalaman_dibidang'];
	$jk 					=$_POST['jk'];
	$pendidikan_min			=$_POST['pendidikan_min'];
	$ipk_min				=$_POST['ipk_min'];
	$spesifikasi_lain		=$_POST['spesifikasi_lain'];
	$qty					=$_POST['qty'];
	$batas_lowongan			=$_POST['batas_lowongan'];
	
	$sql	=mysqli_query($connect,'UPDATE lowongan SET nama_pekerjaan="'.$nama_pekerjaan.'",usia="'.$usia.'",pengalaman_dibidang="'.$pengalaman_dibidang.'",jk="'.$jk.'",pendidikan_min="'.$pendidikan_min.'",ipk_min="'.$ipk_min.'",spesifikasi_lain="'.$spesifikasi_lain.'",qty="'.$qty.'",batas_lowongan="'.$batas_lowongan.'" where id_job="'.$id_job.'"');
	
	if($sql){
		echo "data sudah Terupdate";
	}
	else{
		echo 'Gagal';
	}
}
/*if(isset($_POST['tedit'])){
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$kelas	= $_POST['kelas'];
	$nis	= $_POST['nis'];
	
	$sql	= 'update siswa set nama="'.$nama.'", alamat="'.$alamat.'", kelas="'.$kelas.'" where nis="'.$nis.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: siswa.php');
	}
	else{
		echo 'Gagal';
	}
}*/
?>
<p><a href="LL.php">lihat data</a></p>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>