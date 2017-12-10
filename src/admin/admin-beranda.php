<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:../login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<?php include('header.php'); ?>
<div class="row">
  <!-- SIDEBAR -->
  <?php include ('sidebar-admin.php'); ?>
  <!-- CONTENT -->
  <div class="col-md-9">
    <div class="content">
      <h3>BERANDA</h3>
      <div class="row">
      <div class="col-md-12">
      <div class='view'>
      SELAMAT DATANG <?php echo "$username"; ?> 
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>