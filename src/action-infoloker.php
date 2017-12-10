<?php include 'header.php' ?>
<body>
	<div>
	<table border="2">
		<th>Nama Perusahaan</th>
		<th>Jabatan</th>
		<th>Kuota</th>
		<th>Batas Pengumpulan lamaran</th>
		<th>Email</th>
<?php

	$host="127.0.0.1";
	$username="root";
	$password="";
	$db="Lowongan";

	$connect=mysql_connect($host,$username,$password);
	$find=mysql_select_db($db);

if ($_POST['Submit']=="Submit") {
	$pengalaman=$_POST['Pengalaman'];

	//echo $id_job.''.$id_persh.''.$jabatan.''.$usia.''.$pengalaman.''.$JK.''.$pendidikan.''.$IPK.''.$lainnya.''.$qty.''.$closing_date;
	$query="select perusahaan.nama_persh,lowongan.jabatan,lowongan.qty,lowongan.closing_date,perusahaan.email from perusahaan,lowongan where lowongan.id_persh=perusahaan.id_persh and lowongan.pengalaman='$pengalaman'";
			$sql=mysql_query($query);
			//$no = 1;

		while ($data=mysql_fetch_array($sql)) {

				
		 
?>
<tr >
			<td align="center"><?php echo $data['nama_persh']; ?></td>
			<td align="center"><?php echo $data['jabatan']; ?></td>
			<td align="center"><?php echo $data['qty']; ?></td>
			<td align="center"><?php echo $data['closing_date']; ?></td>
			<td align="center"><?php echo $data['email']; ?></td>
</tr>
			<?php $no++; }}?>
	</table>
	  <center><b><a href="infoloker.php">kembali</a></b></center>
	</div>
</body>
</html>
<?php include 'footer.php' ?>