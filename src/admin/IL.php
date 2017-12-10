<?php include('header.php'); ?>
<div class="row">
  <!-- SIDEBAR -->
  <?php include ('sidebar-admin.php'); ?>
  <!-- CONTENT -->
  <div class="col-md-9">
    <div class="content">
      <h3>INPUT lOWONGAN</h3>
      <div class="row">
        <div class="col-md-12">
          <div class='view'>
            <form action="action-input-data.php" method="post" name="form-input-data">
              <table>
                <tr>
                  <td>ID Lowongan</td>
                  <td><input type="text" size="31" name="id_job" maxlength="11"></td>
                </tr>
                <tr>
                  <td>ID Perusahaan</td>
                  <td><select name="id_perusahaan">
                    <option value="-">--pilih Perusahaan--</option>
                    <?php
                      $host="localhost";
                      $username="root";
                      $password="Kelima354[]";
                      $db="Lowongan";

                      $connect=new mysqli($host,$username,$password,$db);

                      $sql=mysqli_query($connect,"SELECT * FROM perusahaan ORDER BY id_perusahaan ASC");
                      if (mysqli_num_rows($sql) !=0) {
                        while ($row=mysqli_fetch_assoc($sql)) {
                          echo '<option value='.$row['id_perusahaan'].'>'.$row['nama_perusahaan'].'</option>';
                        }
                      }
                    ?>
                  </select></td>
                </tr>
                <tr>
                  <td>DETAIL LOWONGAN</td>
                </tr>
                <tr>
                
                </tr>
                <tr>
                  <td>Nama Lowongan</td>
                  <td><input type="text" size="31" name="nama_pekerjaan" maxlength="30"></td>
                </tr>
                <tr>
                  <td>Usia</td>
                  <td><input type="text" size="31" name="usia" maxlength="11"></td>
                </tr>
                <tr>
                  <td>Pengalaman Di Bidang</td>
                  <td>
                    <select name="pengalaman_dibidang">
                      <option value="-">--Pilih Bidang--</option>
                      <option value="website">Website</option>
                      <option value="mobile">Mobile</option>
                      <option value="jaringan">Network</option>
                      <option value="AI">Artificial Intelegent</option>
                      <option value="analisi">Analysist</option>
                      <option value="SofwareEngineering">Software Engineering</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>
                    <input type="radio" name="jk" ckecked value="L">Laki-Laki
                    <input type="radio" name="jk" value="P">Perempuan
                    <input type="radio" name="jk" ckecked value="LP">Laki-Laki dan Perempuan<br>
                  </td>
                </tr>
                <tr>
                  <td>Pendidikan Minimal</td>
                  <td>
                    <select name="pendidikan_min">
                      <option value="-">--Pilih Bidang--</option>
                      <option value="SMA">SMA/SMK/MAN</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Sarjana 1</option>
                      <option value="S2">Sarjana 2</option>
                      <option value="S3">Sarjana 3</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>IPK Minimal</td>
                  <td><input type="text" size="31" name="ipk_min" maxlength="10"></td>
                </tr>
                <tr>
                  <td>Spesifikasi Lain</td>
                  <td>    
                    <textarea name="spesifikasi_lain" rows="3" cols="30"></textarea>
                  </td>
                </tr>
                <tr>
                  <td>Kuota Lowongan</td>
                  <td><input type="text" size="31" name="qty" maxlength="11"></td>
                </tr>
                <tr>
                  <td>Batas Pengajuan lamaran</td>
                  <td><input type="date" name="batas_lowongan"></td>
                </tr>
                <tr align="center">
                  <td colspan="2">
                    <input type="submit" name="Submit" value="Submit">
                    <input type="reset" value="Reset" name="reset">
                  </td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>