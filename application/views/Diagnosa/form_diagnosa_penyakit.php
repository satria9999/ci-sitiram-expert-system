<?php $this->load->view('header'); ?>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Form Diagnosa Penyakit</h5>
        <p>Form ini digunakan untuk diagnosa penyebaran penyakit Jamur & Tiram.</p>
    </div><!-- sl-page-title -->

    <div class="col-xl-7 mg-t-25 mg-xl-t-0">
        <div class="card pd-20 pd-sm-30 form-layout form-layout-4">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Input Data Diagnosa</h6>
            <p class="mg-b-30 tx-gray-600"></p>

            <form action="<?php echo site_url('Diagnosa_Penyakit/cek_penyakit') ?>" method="post" enctype="multipart/form-data">
                <!-- Diagnosa -->
                <div class="form-group row">
                    <div class="col-sm-12">
                        <?php foreach ($gejala as $key) { ?>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="gejala[]" value="<?php echo $key->kode_gejala ?>">
                                <label class="form-check-label">
                                    Kode Gejala <?php echo $key->kode_gejala ?>: <?php echo $key->nama ?>
                                </label>
                            </div>
                        <?php } ?>
                    </div>
                </div><!-- form-group -->

                <div class="form-group row mg-t-30">
                    <div class="col-sm-12 mg-l-auto">
                        <div class="form-layout-footer">
                            <button type="submit" class="btn btn-info mg-r-5">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- col-12 -->
                </div><!-- form-group -->
            </form>
        </div><!-- card -->
    </div><!-- col-7 -->
</div><!-- sl-pagebody -->