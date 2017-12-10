<?php include 'header.php' ?>
<table summary="Summary Here" cellpadding="0" cellspacing="0">
<?php 
include "koneksi.php";
$query	= "select * from perusahaan pr join lowongan lw using(id_persh) order by id_job desc";
$sql	= mysql_query ($query);
$no = 1;
while ($data=mysql_fetch_array($sql)) {

  if($data['JK']==1)
  {
    $jk='Pria';
  } elseif ($data['JK']==2) {
    $jk='Wanita';
  } elseif ($data['JK']==3) {
    $jk='Pria dan Wanita';
  }
?>			
        <tbody>
          <tr class="light">
            <td width="4%"><strong><?php echo $no?></strong></td>
            <td width="96%"><strong><h3><?php echo $data['nama_persh'];?></h3></strong><br>
							<strong>Alamat :</strong>&nbsp;<?php echo $data['almt'];?><br><br>
							<strong>Jabatan :</strong>&nbsp;<?php echo $data['jabatan'];?><br><br>
							<strong>Syarat</strong>:&nbsp;
              Usia min <?php echo $data['usia'];?>, 
              Pengalaman di bidang <?php echo $data['pengalaman'];?>, 
              Jenis Kelamin <?php echo $jk;?>, 
              Pendidikan terakhir <?php echo $data['pendidikan'];?>, 
              IPK min <?php echo $data['IPK'];?>, 
              dan <?php echo $data['lainnya'];?><br><br></td>
          </tr>
      </tbody>
<?php $no++; }?>
    </table>
			
<?php include 'footer.php' ?>