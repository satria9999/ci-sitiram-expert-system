<?php $this->load->view('header'); ?>
<div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Form Diagnosa</h5>
                <p>Form yang digunakan untuk data diagnosa penyebaran penyakit.</p>
            </div><!-- sl-page-title -->
            <div class="col-xl-7 mg-t-25 mg-xl-t-0">
                <div class="card pd-20 pd-sm-30 form-layout form-layout-4">
                    <h4 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Input Data Diagnosa</h4>
                    <p class="mg-b-30 tx-gray-600"></p>
                    <?php if (!empty($diagnosaData)): ?>
                        <form action="<?php echo site_url('Diagnosa_petani/Perhitungan_Petani/' . $diagnosaData['id_diagnosa']); ?>" method="post" enctype="multipart/form-data">
                        <!-- Diagnosa -->
                        <div class="sl-pagebody">
                            <div class="sl-page-title">
                                <h6>Hasil Diagnosa</h6>
                                <p>Diagnosa Penyakit: <?php echo $diagnosaData['kode_penyakit']; ?> <?php echo $diagnosaData['nama']; ?></p>
                                <input type="hidden" name="id_diagnosa" value="<?php echo $diagnosaData['id_diagnosa']; ?>" class="form-control " placeholder="kode penyakit">
                            </div>
                            <?php else: ?>
                            <p>No data available</p>
                        <?php endif; ?>
                        </div>
                        <div class="row row-xs ">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Suhu Udara:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="number" name="suhu" class="form-control " placeholder="Masukan Suhu Udara 5-45">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Kelembapan Udara:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="number" name="kelembapan" class="form-control " placeholder="Masukan Kelembapan Udara 1-100">
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
            