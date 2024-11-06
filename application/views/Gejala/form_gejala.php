<?php $this->load->view('header'); ?>
<?= $this->session->flashdata('message'); ?>
<div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Form Gejala</h5>
                <p>Form yang digunakan untuk input data gejala.</p>
            </div><!-- sl-page-title -->
            <div class="col-xl-7 mg-t-25 mg-xl-t-0">
                <div class="card pd-20 pd-sm-30 form-layout form-layout-4">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Input Data Gejala</h6>
                    <p class="mg-b-30 tx-gray-600"></p>
                    <form action="<?php echo site_url('Gejala/add_data') ?>" method="post" enctype="multipart/form-data">
                        <!-- Diagnosa -->
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                               Kode Gejala:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="kode_gejala" class="form-control " placeholder="Masukan Kode Gejala">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Nama Gejala</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="nama" class="form-control " placeholder="Masukan Nama Gejala">
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row row-xs mg-t-30">
                            <div class="col-sm-8 mg-l-auto">
                                <div class="form-layout-footer">
                                    <button type="submit" class="btn btn-info mg-r-5">Submit</button>
                                    <button type="cancel" class="btn btn-secondary">Cancel</button>
                                </div><!-- form-layout-footer -->
                            </div><!-- col-8 -->
                        </div>
                    </form>
                </div><!-- card -->
            </div><!-- col-6 -->
            