<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> BP3K Karawang</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->
      
<label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="<?php echo base_url('Dashboard/Dashboard');?>" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Sistem Informasi</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item" ><a href="<?php echo base_url('Dashboard_petani/fungsi_keanggotaan_petani');?>" class="nav-link">Lihat Fungsi keanggotaan</a></li>
        <li class="nav-item" ><a href="<?php echo base_url('Dashboard_petani/informasi_penyakit_petani');?>" class="nav-link">Lihat Informasi Penyakit</a></li>
        <li class="nav-item" ><a href="<?php echo base_url('Dashboard_petani/lihat_gejala_petani');?>" class="nav-link">Gejala Jamur Tiram</a></li>
        <li class="nav-item" ><a href="<?php echo base_url('Dashboard_petani/lihat_penyakit_petani');?>" class="nav-link">Penyakit Jamur Tiram</a></li>
        <li class="nav-item" ><a href="<?php echo base_url('Dashboard_petani/lihat_rule_penyakit_petani');?>" class="nav-link">Rule Penyakit Jamur Tiram</a></li>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Sistem Pakar Jamur</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="<?php echo base_url('Dashboard_petani/history_diagnosa_petani');?>" class="nav-link"> History Diagnosa</a></li>
          <li class="nav-item"><a href="<?php echo base_url('Dashboard_petani/form_diagnosa_penyakit_petani');?>" class="nav-link">Diagnosa Penyakit</a></li>
        </ul>
                
      
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->