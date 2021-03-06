<?php 
 include '_loader.php';
 $setTemplate=true;
 if(isset($_GET['halaman'])){
    $halaman=$_GET['halaman'];
  }
  else{
    $halaman='beranda';
  }
  ob_start();
  $file='_halaman/'.$halaman.'.php';
  if(!file_exists($file)){
    include '_halaman/error.php';
  }
  else{
    include $file;
  }
  $content = ob_get_contents();
  ob_end_clean();

  if($setTemplate==true){

?>
<!DOCTYPE html>
<html lang="en">
<?php include '_layouts/head.php'?>
<body>
<body class="hold-transition skin-red layout-top-nav">
<div class="wrapper">
<?php
  include '_layouts/header.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         <?=$judul?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?=$judul?></li>
      </ol>
    </section>
<?php
  echo $content;
?>
 <!-- /.content -->
 </div>
  <!-- /.content-wrapper -->
<?php
  include '_layouts/footer.php';
  include '_layouts/javascript.php';
?>
</div>
</body>
</html>
  <?php } else {
    echo $content;
  }  

if(isset($fileJs)){
  include '_halaman/js/'.$fileJs.'.php';
}

  ?>

