
<?php include('header.php'); ?>
<?php include('koneksi.php');

          if ($_GET['pilihan']=="tb_gk"){
            $plh="KONVENSIONAL";
            $kd="GK";
          }
          else {
            $plh="INJEKSI";
             $kd="GI";
   
                      }


                       
 ?>
<div class="row">
  <!-- SIDEBAR -->
  <?php include('sidebar-admin.php'); ?>
  <!-- CONTENT -->
  <div class="col-md-9">
    <div class="content">
      <h3>TAMBAH GEJALA</h3>
      <div class="page-header">
        <h2><?php echo $plh; ?></h2>
      </div>
      <div class="row">
        <form  class="form-horisontal" method="get">
          <div class="form-group"> 
            <label class=" col-sm-2 control-label">Kode Gejala</label>
            <div class="col-sm-2"> 
              <fieldset disabled>
               <input type="text" id="kode" class="form-control" value ="<?php echo $kd; ?>" placeholder="GK">
             </fieldset> </div>
             <div class="col-sm-8">
             <input type="hidden" class="form-control" name="pilihan" value="<?php echo $_GET['pilihan']; ?>" readonly>
              <input type="text" class="form-control" name="kd_gejala">
            </div>
            <label class=" col-sm-2 control-label">Nama Gejala</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_gejala">
            </div>       
            <label class=" col-sm-2 control-label">Nilai Bobot</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nilai">
            </div>
            </div>
                <br>
        <br>
        <div class="col-sm-5"></div>
        <div class="col-sm-2">
          <button class="btn btn-primary btn-block" name="ok" value="ok">S I M P A N</button>
        </div>
        <div class="col-sm-5"></div>
        </form>
        <br>
        <br>
        <?php 
if(isset($_GET['ok']))   
        {   
         if(empty($_GET['kd_gejala']))  
         { 
          echo " Andabelum mengisi kode gejala";
        }
        else if (empty($_GET['nama_gejala'])) {
         echo " Anda belum mengisi nama gejala";
       }
       else if (empty($_GET['nilai'])) {
        echo " anda belum mengisi nilai bobot";
      }
      else {
        $kd_gejala=$_GET['kd_gejala'];
        $nama_gejala=$_GET['nama_gejala'];
        $nilai=$_GET['nilai'];
        $pilih=$_GET['pilihan'];
        mysqli_query($konek,"insert into $pilih (kd_gejala, nama_gejala,nilai_bobot) value ($kd_gejala, '$nama_gejala', '$nilai')");
        echo "<br><br> Berhasil disimpan";
        header("location:admin-gejala.php?pilihan=$pilih&ok=ok");
      }
    }
      ?> 
    </div>
    <div class="clearfix"></div>
  </div>
</div>
</div>
<?php include('footer.php'); ?>