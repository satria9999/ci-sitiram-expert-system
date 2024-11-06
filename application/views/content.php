 <!-- ########## START: MAIN PANEL ########## -->
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">

      <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Data Gejala</h6>
                <a href="<?php echo base_url('Dashboard/lihat_gejala');?>" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                
                <h6 class="mg-b-0 tx-white tx-lato tx-bold">Jumlah Gejala:</h6>
                <?php
                if (isset($jumlah_gejala)) {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">' . $jumlah_gejala . '</h4>';
                } else {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">Data tidak tersedia</h4>';
                }
                ?>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gejala</span>
                  <h6 class="tx-white mg-b-0">Jamur Tiram</h6>
                </div>
                <div>
              <span class="tx-11 tx-white-6">Tahun</span>
              <h6 class="tx-white mg-b-0"><?php echo date('Y'); ?></h6>
          </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Data Penyakit</h6>
                <a href="<?php echo base_url('Dashboard/lihat_penyakit');?>" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
              <h6 class="mg-b-0 tx-white tx-lato tx-bold">Jumlah Penyakit:</h6>
                <?php
                if (isset($jumlahPenyakit)) {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">' . $jumlahPenyakit. '</h4>';
                } else {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">Data tidak tersedia</h4>';
                }
                ?>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Penyakit</span>
                  <h6 class="tx-white mg-b-0">Jamur Tiram</h6>
                </div>
                <div>
                <span class="tx-11 tx-white-6">Tahun</span>
              <h6 class="tx-white mg-b-0"><?php echo date('Y'); ?></h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Jumlah Rule Penyakit</h6>
                <a href="<?php echo base_url('Dashboard/lihat_rule_penyakit');?>" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
              <h6 class="mg-b-0 tx-white tx-lato tx-bold">Jumlah Rule Penyakit:</h6>
                <?php
                if (isset($jumlah_rule)) {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">' . $jumlah_rule. '</h4>';
                } else {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">Data tidak tersedia</h4>';
                }
                ?>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                <span class="tx-11 tx-white-6">Jumlah Rule Penyakit</span>
                  <h6 class="tx-white mg-b-0">Jamur Tiram</h6>
                </div>
                <div>
                <span class="tx-11 tx-white-6">Tahun</span>
              <h6 class="tx-white mg-b-0"><?php echo date('Y'); ?></h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Jumlah Hasil Diagnosa</h6>
                <a href="<?php echo base_url('Dashboard/history_diagnosa');?>" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
              <h6 class="mg-b-0 tx-white tx-lato tx-bold">Jumlah Diagnosa:</h6>
                <?php
                if (isset($jumlah_diagnosa)) {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">' . $jumlah_diagnosa. '</h4>';
                } else {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">Data tidak tersedia</h4>';
                }
                ?>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Jumlah Diagnosa</span>
                  <h6 class="tx-white mg-b-0">Jamur Tiram</h6>
                </div>
                <div>
                <span class="tx-11 tx-white-6">Tahun</span>
              <h6 class="tx-white mg-b-0"><?php echo date('Y'); ?></h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->
            

      </div><!-- sl-pagebody -->
      <footer class="sl-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2023. University Horizon Indonesia</div>
          <div>Made by Horizon.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->