<?php include('header.php'); ?>
<div class="row">
  <!-- SIDEBAR -->
  <?php include ('sidebar-admin.php'); ?>
  <!-- CONTENT -->
  <div class="col-md-9">
    <div class="content">
      <h3>List Lowongan</h3>
        <div class="row">
          <div class="col-md-12">
            <div class='view'>
              <center>
                <table border="1">
                <tr>
                  <th align="center">ID_job</th>
                  <th align="center">ID_Persh</th>
                  <th align="center">Jabatan</th>
                  <th align="center">Pengalaman</th>
                  <th align="center">JK</th>
                  <th align="center">Pendidikan</th>
                  <th align="center">IPK</th>
                  <th align="center">Deskripsi lain</th>
                  <th colspan="2" align="center">Action</th>
                </tr>

                <?php
                  $link=new mysqli("localhost","root","Kelima354[]","Lowongan");

                  $i=0;
                  $result=mysqli_query($link,'select * from lowongan ');
                  while ($data=mysqli_fetch_array($result)) {
                    if($data['jk']=='L')
                    {
                      $jk='Pria';
                    } elseif ($data['jk']=='P') {
                      $jk='Wanita';
                    } elseif ($data['jk']=='LP') {
                      $jk='Pria dan Wanita';
                    }
                ?>
                <?php
                echo "  
                <tr>
                  <td>".$data['id_job']."</td>
                  <td>".$data['id_perusahaan']."</td>
                  <td>".$data['nama_pekerjaan']."</td>
                  <td>".$data['pengalaman_dibidang']."</td>
                  <td>".$jk."</td>
                  <td>".$data['pendidikan_min']."</td>
                  <td>".$data['ipk_min']."</td>
                  <td>".$data['spesifikasi_lain']."</td>
                      
                  <td> <form action = 'edit.php' method = 'GET'>
                    <input type = 'submit' name = 'tombol' value = 'Edit' class = 'edit'>"; 
                    echo " <input type = 'hidden' name = 'id_job' value = '".$data['id_job']."'>
                  </form></td>
    
                  <td> <form action = 'delete.php' method = 'GET'>
                    <input type = 'hidden' name = 'id_job' value = '".$data['id_job']."'>
    
                    <input type = 'submit' name = 'tombol' value = 'Delete' class = 'delete'
                    onclick='return tanya(". $data['id_job'].")'>
                  </form></td>
                </tr> ";
                $i++;}?>
                </table>                
              </center>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>