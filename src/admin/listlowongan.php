<?php
include 'header.php';
include 'sidebar-admin.php';
?>

<section class="mainContent">
        <article class="productInfo">
          <div id="konten">
<h2>List Lowongan</h2>
<table border="1">
	<tr>
		<th>ID_job</th>
		<th>ID_perusahan</th>
		<th>Jabatan</th>
		<th>Pengalaman</th>
		<th>Jenis Kelamin</th>
		<th>Pendidikan</th>
		<th>IPK</th>
		<th>Deskripsi lainnya</th>
		<th colspan="2">Action</th>
	</tr>

<?php
	$link=mysql_connect("127.0.0.1","root","");
	$result=mysql_query('USE Lowongan');

	$i=0;
	$result=mysql_query('select * from lowongan ');
	while ($data=mysql_fetch_array($result)) {
	if($data['JK']==1)
  {
    $jk='Pria';
  } elseif ($data['JK']==2) {
    $jk='Wanita';
  } elseif ($data['JK']==3) {
    $jk='Pria dan Wanita';
  }
?>
<tr>
	<td><?php echo $data['id_job'] ?></td>
	<td><?php echo $data['id_persh'] ?></td>
	<td><?php echo $data['jabatan'] ?></td>
	<td><?php echo $data['pengalaman'] ?></td> 
	<td><?php echo $jk ?></td>
	<td><?php echo $data['pendidikan'] ?></td>
	<td><?php echo $data['IPK'] ?></td>
	<td><?php echo $data['lainnya'] ?></td>
	<td>
		<a href="edit.php?id_job=<?php echo $data['id_job'];?>" title="Edit siswa ini">Edit</a>
    </td>
    <td>
    <a href="delete.php?id_job=<?php echo $data['id_job'];?>" onclick="return confirm('Yakin mau di hapus?');">hapus</a>
	</td>
</tr>
<?php $i++;} ?>
</table>

<?php 
include 'footer.php'; 
?>