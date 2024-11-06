<!DOCTYPE html>
<html lang="en">
<?php
if(!isset($_SESSION['nama'])){
redirect('Auth');
}else{ ?>
  <head>
  <?php $this->load->view('petani/header_petani'); ?>
  </head>
  <body>
  <!-- ########## START: LEFT PANEL ########## -->
  <?php $this->load->view('petani/sidebar_petani'); ?>
  <!-- ########## END: LEFT PANEL ########## -->
  <!-- ########## START: HEAD PANEL ########## -->
  <?php $this->load->view('petani/profile_petani'); ?>
  <!-- ########## END: HEAD PANEL ########## -->
  <!-- ########## START: RIGHT PANEL ########## -->

  <!-- ########## END: RIGHT PANEL ########## -->
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
  <?php $this->load->view($content); ?>
  </div>

  <!-- ########## END: MAIN PANEL ########## -->
  <?php $this->load->view('petani/js_petani'); ?>
  </body>
  <?php } ?>
</html>
