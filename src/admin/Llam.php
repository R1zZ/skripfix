<?php include('header.php'); ?>
<div class="row">
  <!-- SIDEBAR -->
  <?php include ('sidebar-admin.php'); ?>
  <!-- CONTENT -->
  <div class="col-md-9">
    <div class="content">
      <h3>List Lamaran</h3>
        <div class="row">
          <div class="col-md-12">
            <div class='view'>
              <center>
                <table border="1">
                <tr>
                  <th align="center">ID_Lamaran</th>
                  <th align="center">Perusahaan</th>
                  <th align="center">Pekerjaan</th>
                  <th align="center">NIM</th>
                </tr>

                <?php
                  $link=new mysqli("localhost","root","Kelima354[]","Lowongan");

                  $i=0;
                  $result=mysqli_query($link,'select * from lamaran JOIN lowongan join perusahaan join mahasiswa ');
                  while ($data=mysqli_fetch_array($result)) {
                ?>
                <?php
                echo "  
                <tr>
                  <td>".$data['id_lamaran']."</td>
                  <td>".$data['nama_perusahaan']."</td>
                  <td>".$data['nama_pekerjaan']."</td>
                  <td>".$data['nama_mhs']."</td>
                      
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