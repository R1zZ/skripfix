<html>
	<body>
		<div class="form-row">
			<?php
				include 'header.php';

				if (isset($_POST['Submit'])) {
						$host="localhost";
						$username="root";
						$password="Kelima354[]";
						$db="Lowongan";
						
						$connect=new mysqli($host,$username,$password,$db);

						$id_perusahaan	=$_POST['id_perusahaan'];
						$id_job			=$_POST['id_job'];
						$NIM			=$_POST['NIM'];
			//echo $id_perusahaan.$id_job.$NIM;
						$sql="INSERT INTO lamaran VALUES(DEFAULT,'$id_perusahaan','$id_job','$NIM')";
						$query_input=mysqli_query($connect,$sql);

						if($query_input){
							echo "Upload Berhasil";
							mysqli_close($connect);
						}
			            else{
						    echo "Upload file gagal...";
						    mysql_close($connect);
			            }
					}	

				include 'footer.php';
			?>
		</div>
		<div>
	  		<b><a href="body.php">Isikan data kembali</a></b>
		</div>
	</body>
</html>