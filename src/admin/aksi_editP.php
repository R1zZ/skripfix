<?php
include('header.php');
include ('sidebar-admin.php');

if(isset($_POST['ubah'])){
  $host="localhost";
  $username="root";
  $password="Kelima354[]";
  $db="Lowongan";

  $connect=new mysqli($host,$username,$password,$db);
  
  	$id_perusahaan=$_POST['id_perusahaan'];
	$nama_perusahaan=$_POST['nama_perusahaan'];
	$almt=$_POST['almt'];
	$no_telp=$_POST['no_telp'];
	$email=$_POST['email'];

	
	$sql	=mysqli_query($connect,'UPDATE perusahaan SET nama_perusahaan="'.$nama_perusahaan.'",almt="'.$almt.'",no_telp="'.$no_telp.'",email="'.$email.'" where id_perusahaan="'.$id_perusahaan.'"');
	
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
<p><a href="LP.php">lihat data</a></p>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>