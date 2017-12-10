<?php include('header.php'); ?>
<div class="row">
  <!-- SIDEBAR -->
  <?php include ('sidebar-admin.php'); ?>
  <!-- CONTENT -->
  <div class="col-md-9">
    <div class="content">
      <h3>EDIT DATA</h3>
        <div class="row">
          <div class="col-md-12">
            <div class='view'>
              <?php 
                if(isset($_GET['id_job'])){
                  $host="localhost";
                  $username="root";
                  $password="Kelima354[]";
                  $db="Lowongan";
                  $connect=new mysqli($host,$username,$password,$db);

                  $id_job       = $_GET['id_job'];
                  $query        = mysqli_query($connect,'SELECT * from lowongan where id_job = "'.$id_job.'"');
                  $data         = mysqli_fetch_array($query);
                  $id_perusahaan     = $data['id_perusahaan'];
                  $nama_pekerjaan      = $data['nama_pekerjaan'];
                  $usia         = $data['usia'];
                  $pengalaman_dibidang   = $data['pengalaman_dibidang'];
                  $jk           = $data['jk'];
                  $pendidikan_min   = $data['pendidikan_min'];
                  $ipk_min          = $data['ipk_min'];
                  $spesifikasi_lain      = $data['spesifikasi_lain'];
                  $qty          = $data['qty'];
                  $batas_lowongan = $data['batas_lowongan'];
                }
                else{
                  $id_perusahaan     = '';
                  $nama_pekerjaan      = '';
                  $usia         = '';
                  $pengalaman_dibidang   = '';
                  $jk           = '';
                  $pendidikan_min   = '';
                  $ipk_min          = '';
                  $spesifikasi_lain      = '';
                  $qty          = '';
                  $batas_lowongan = '';
                }
              ?>
              </p></h2>
              <form method="post" name="form-edit-data" action="aksi_edit.php">
                <table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
  <!--DWLayoutTable-->
                <tr>
                  <td width="189" height="20"> </td>
                  <td width="26"> </td>
                  <td width="331"> </td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">ID Job</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle">
                    <input type="text" name="id_job" value="<?php echo $_GET['id_job']; ?>" readonly="readonly"> 
                  </td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">ID Perusahaan</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>
                    <input type="text" name="id_perusahaan" value="<?php echo $id_perusahaan; ?>" readonly="readonly">
                  </label></td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">nama_pekerjaan</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>
                    <input name="nama_pekerjaan" type="text" size="50" value="<?php echo $nama_pekerjaan; ?>">
                  </label></td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">Usia</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>
                    <input name="usia" type="text" size="50" value="<?php echo $usia; ?>">
                  </label></td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">pengalaman_dibidang</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>
                    <select name="pengalaman_dibidang">
                      <option value="<?php echo $pengalaman_dibidang;?>"><?php echo $pengalaman_dibidang;?></option>
                      <option value="website">Website</option>
                      <option value="mobile">Mobile</option>
                      <option value="jaringan">Network</option>
                      <option value="AI">Artificial Intelegent</option>
                      <option value="analisi">Analysist</option>
                      <option value="SofwareEngineering">Software Engineering</option>
                    </select></td>
                  </label></td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">jk</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>
                    <input type="radio" name="jk" value="L" <?php echo ($jk=='L')?'checked':'' ?>>Pria
                    <input type="radio" name="jk" value="P" <?php echo ($jk=='P')?'checked':'' ?>>Wanita
                    <input type="radio" name="jk" value="LP" <?php echo ($jk=='LP')?'checked':'' ?>>Pria dan Wanita
                  </label></td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">pendidikan_min</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>
                    <input type="radio" name="pendidikan_min" value="SMA" <?php echo ($pendidikan_min=='SMA')?'checked':'' ?>>SMA/SMK/MAN
                    <input type="radio" name="pendidikan_min" value="D3" <?php echo ($pendidikan_min=='D3')?'checked':'' ?>>D3
                    <input type="radio" name="pendidikan_min" value="S1" <?php echo ($pendidikan_min=='S1')?'checked':'' ?>>S1
                    <input type="radio" name="pendidikan_min" value="S2" <?php echo ($pendidikan_min=='S2')?'checked':'' ?>>S2
                    <input type="radio" name="pendidikan_min" value="S3" <?php echo ($pendidikan_min=='S3')?'checked':'' ?>>S3
                  </label></td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">ipk_min</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>
                    <input name="ipk_min" type="text" size="50" value="<?php echo $ipk_min; ?>">
                  </label></td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">spesifikasi_lain</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>
                    <input name="spesifikasi_lain" type="text" size="50" value="<?php echo $spesifikasi_lain; ?>">
                  </label></td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">Kuota</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>
                    <input name="qty" type="text" size="50" value="<?php echo $qty; ?>">
                  </label></td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">Batas Waktu</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>
                    <input name="batas_lowongan" type="date" size="50" value="<?php echo $batas_lowongan; ?>">
                  </label></td>
                </tr>
                <tr>
                  <td height="42"> </td>
                  <td> </td>
                  <td><input type="submit" name="ubah" value="EDIT"></td>
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