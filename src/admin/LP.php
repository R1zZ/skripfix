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
                    <th align="center">ID Persh</th>
                    <th align="center">Nama_Persh</th>
                    <th align="center">Alamat</th>
                    <th align="center">No Telp</th>
                    <th align="center">Email</th>
                    <th colspan="3" align="center">Action</th>
                  </tr>

                  <?php
                    $link=new mysqli("localhost","root","Kelima354[]","Lowongan");

                    $i=0;
                    $result=mysqli_query($link,'select * from perusahaan ');
                    while ($data=mysqli_fetch_array($result)) {
                  ?>
                  <?php
                  echo "  
                  <tr>
                    <td>".$data['id_perusahaan']."</td>
                    <td>".$data['nama_perusahaan']."</td>
                    <td>".$data['almt']."</td>
                    <td>".$data['no_telp']."</td>
                    <td>".$data['email']."</td>
                    <td>".$data['spesifikasi_lain']."</td>
                        
                    <td> <form action = 'editP.php' method = 'GET'>
                      <input type = 'submit' name = 'tombol' value = 'Edit' class = 'edit'>"; 
                      echo " <input type = 'hidden' name = 'id_perusahaan' value = '".$data['id_perusahaan']."'>
                    </form></td>
      
                  <td> <form action = 'deleteP.php' method = 'GET'>
                    <input type = 'hidden' name = 'id_job' value = '".$data['id_perusahaan']."'>
    
                    <input type = 'submit' name = 'tombol' value = 'Delete' class = 'delete'
                    onclick='return tanya(". $data['id_perusahaan'].")'>
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