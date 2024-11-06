<?php $this->load->view('header'); ?>
<div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Form Rule Penyakit</h5>
                <p>Form yang digunakan untuk input data penyakit.</p>
            </div><!-- sl-page-title -->
            <div class="col-xl-7 mg-t-25 mg-xl-t-0">
                <div class="card pd-20 pd-sm-30 form-layout form-layout-4">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Input Data Rule Penyakit</h6>
                    <p class="mg-b-30 tx-gray-600"></p>
                    <form action="<?php echo site_url('Diagnosa_Penyakit/add_data') ?>" method="post" enctype="multipart/form-data">
                        <!-- Diagnosa -->
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Kode Rule</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="rule" class="form-control " placeholder="Masukan Kode Rule">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                               Kode Penyakit:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2-show-search" name="kode_penyakit" id="kode_penyakit_select1" >
                            <?php foreach ($penyakit as $key) { ?>
                                <option value="<?php echo $key->kode_penyakit; ?>"><?php echo $key->kode_penyakit; ?></option> 
                            <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Nama Penyakit</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="nama" class="form-control " id="nama" placeholder="Pilih Kode Penyakit" readonly>
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                               Kode Gejala 1:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2-show-search" name="kode_gejala1" >
                            <?php foreach ($gejala as $key) { ?>
                                <option value="<?php echo $key->kode_gejala; ?>"><?php echo $key->kode_gejala; ?>: <?php echo $key->nama; ?></option>
                            <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                               Kode Gejala 2:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2-show-search" name="kode_gejala2" >
                            <?php foreach ($gejala as $key) { ?>
                                <option value="<?php echo $key->kode_gejala; ?>"><?php echo $key->kode_gejala; ?>: <?php echo $key->nama; ?></option>
                            <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                               Kode Gejala 3:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2-show-search" name="kode_gejala3" >
                            <?php foreach ($gejala as $key) { ?>
                                <option value="<?php echo $key->kode_gejala; ?>"><?php echo $key->kode_gejala; ?>: <?php echo $key->nama; ?></option>
                            <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                               Kode Gejala 4:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2-show-search" name="kode_gejala4" >
                            <?php foreach ($gejala as $key) { ?>
                                <option value="<?php echo $key->kode_gejala; ?>"><?php echo $key->kode_gejala; ?>: <?php echo $key->nama; ?></option>
                            <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                               Kode Gejala 5:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2-show-search" name="kode_gejala5" >
                            <?php foreach ($gejala as $key) { ?>
                                <option value="<?php echo $key->kode_gejala; ?>"><?php echo $key->kode_gejala; ?>: <?php echo $key->nama; ?></option>
                            <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                               Kode Gejala 6:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2-show-search" name="kode_gejala6" >
                            <?php foreach ($gejala as $key) { ?>
                                <option value="<?php echo $key->kode_gejala; ?>"><?php echo $key->kode_gejala; ?>: <?php echo $key->nama; ?></option>
                            <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Solusi</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <!-- <input type="text" name="solusi" class="form-control "  placeholder="Masukan Solusi"> -->
                                <textarea name="solusi" id="" cols="40" rows="5" placeholder="Masukan Solusi"></textarea>
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
    
            <script>
    var selectElement = document.getElementById("kode_penyakit_select1");
    var namaElement = document.getElementById("nama");

    selectElement.addEventListener("change", function() {
        var selectedOption = selectElement.options[selectElement.selectedIndex];
        var kodepenyakit1 = selectedOption.value;

        // Mengirim permintaan AJAX ke server untuk mendapatkan data nama
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                namaElement.value = data.nama;
            }
        };
        xhr.open("GET", "<?php echo site_url('Penyakit/get_nama'); ?>?kode_penyakit1=" + kodepenyakit1, true);
        xhr.send();
    });
</script>

            