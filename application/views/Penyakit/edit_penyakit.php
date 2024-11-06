<?php $this->load->view('header'); ?>
<?php
foreach ($penyakit as $row) {
?>

<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
<?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>

<div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Form Edit Penduduk</h5>
                <p>Form yang digunakan untuk edit data penduduk.</p>
            </div><!-- sl-page-title -->
            <div class="col-xl-7 mg-t-25 mg-xl-t-0">
                <div class="card pd-20 pd-sm-30 form-layout form-layout-4">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Data Penduduk</h6>
                    <p class="mg-b-30 tx-gray-600"></p>
                    <form action="<?php echo site_url('Penyakit/update/'.$row->kode_penyakit)?>" method="post" enctype="multipart/form-data" >
                        <!-- Nama Lengkap -->
                        <div class="row row-xs">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Nama
                                Lengkap:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="kode_penyakit" value="<?php echo $row->kode_penyakit; ?>" class="form-control" placeholder="Masukan Kode Penyakit" readonly>
                            </div>
                        </div><!-- row -->
                        <!-- NIK -->
                        <div class="row row-xs mg-t-20">
                        <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Nama
                                Penyakit:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="nama" value="<?php echo $row->nama; ?>" class="form-control" placeholder="Masukan Nama Penyakit">
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row row-xs mg-t-30">
                            <div class="col-sm-8 mg-l-auto">
                                <div class="form-layout-footer">
                                    <button type="submit" class="btn btn-info mg-r-5">Submit Form</button>
                                    <button type="cancel" class="btn btn-secondary">Cancel</button>
                                </div><!-- form-layout-footer -->
                            </div><!-- col-8 -->
                        </div>
                    </form>
                </div><!-- card -->
            </div><!-- col-6 -->
            <?php } ?>