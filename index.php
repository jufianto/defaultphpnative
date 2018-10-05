<?php include "view/template/head.html" ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include "view/template/header.php" ?>

    <?php include "view/template/sidebar.php" ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php
      include 'vendor/route.php';
      ?>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </footer>
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->

 <?php include 'view/template/footer.php' ?>
