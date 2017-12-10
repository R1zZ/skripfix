<?php include('header.php'); ?>
<div class="row">
  <!-- SIDEBAR -->
  <?php include ('sidebar-admin.php'); ?>
  <!-- CONTENT -->
  <div class="col-md-9">
    <div class="content">
      <h3>INPUT PERUSAHAAN</h3>
      <div class="row">
        <div class="col-md-12">
          <div class='view'>
            <form action="actionPerusahaan.php" method="post" name="form-input-data">
              <table>
                <tr>
                  <td>ID Perusahaan</td>
                  <td><input type="text" size="31" name="id_perusahaan" maxlength="11"></td>
                </tr>
                <tr>
                  <td>Nama Perusahaan</td>
                  <td><input type="text" size="31" name="nama_perusahaan" maxlength="20"></td>
                </tr>
                <tr>
                  <td>alamat</td>
                  <td>    
                    <textarea name="almt" rows="3" cols="30""></textarea>
                  </td>
                </tr>
                <tr>
                  <td>No Telphone</td>
                  <td><input type="text" size="31" name="no_telp" maxlength="15"></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><input type="email" name="email" maxlength="31"></td>
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