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
                if(isset($_GET['id_lamaran'])){
                  $host="localhost";
                  $username="root";
                  $password="Kelima354[]";
                  $db="Lowongan";
                  $connect=new mysqli($host,$username,$password,$db);

                  $id_perusahaan       = $_GET['id_lamaran'];
                  $query        = mysqli_query($connect,'SELECT * from lamaran where id_lamaran = "'.$id_lamaran.'"');
                  $data         = mysqli_fetch_array($query);
                  $id_perusahaan     = $data['id_perusahaan'];
                  $NIM      = $data['NIM'];
                }
                else{
                  $id_perusahaan     = '';
                  $nama_perusahaan      = '';
                  $NIM         = '';
                }
              ?>
              </p></h2>
              <form method="post" name="form-edit-data" action="aksi_editP.php">
                <table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
  <!--DWLayoutTable-->
                <tr>
                  <td width="189" height="20"> </td>
                  <td width="26"> </td>
                  <td width="331"> </td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">ID Perusahaan</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle">
                    <input type="text" name="id_perusahaan" value="<?php echo $_GET['id_perusahaan']; ?>" readonly="readonly"> 
                  </td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">Nama Perusahaan</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>
                    <input type="text" name="nama_perusahaan" value="<?php echo $nama_perusahaan; ?>">
                  </label></td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">ALamat</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>

                    <input name="almt" type="text" size="50" value="<?php echo $almt; ?>">
                  </label></td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">No Telphone</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>
                    <input name="no_telp" type="text" size="50" value="<?php echo $no_telp; ?>">
                  </label></td>
                </tr>
                <tr>
                  <td height="27" align="right" valign="middle">Email</td>
                  <td align="center" valign="top">:</td>
                  <td valign="middle"><label>
                    <input name="email" type="email" size="50" value="<?php echo $email; ?>">
                  </label></td>
                </tr>                <tr>
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