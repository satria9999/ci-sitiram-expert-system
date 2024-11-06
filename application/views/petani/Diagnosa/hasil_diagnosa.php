
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <span>Hasil Diagnosa</span>
            <?php foreach ($diagnosa as $data) { ?>
                <a href="<?= site_url('Diagnosa_petani/export_pdf_diagnosa_petani/'. $data->id_diagnosa); ?>" class="btn btn-success">
                    <i class="icon ion-document-text"></i> PDF
                </a>
            <?php } ?>
        </div>
        <div class="card-body">

            <!-- Tampilkan informasi hasil diagnosa di sini -->
            <ul class="list-group">
                <?php foreach ($diagnosa as $data) { ?>
                    <li class="list-group-item">Nilai Suhu Yang dimasukan: <?= $data->suhu ?></li>
                    <li class="list-group-item">Nilai Kelembapan: <?= $data->kelembapan ?></li>
                    <li class="list-group-item">Terdiagnosa Penyakit: <?= $data->kode_penyakit ?> <?= $data->nama ?></li>
                </ul>

                <!-- Fungsi keanggotaan Suhu -->
                <div class="mt-4">
                    <h5>Fungsi keanggotaan Suhu</h5>
                    <img src="<?= base_url('assets/img/suhu.png') ?>" class="img-fluid" alt="Fungsi keanggotaan Suhu">
                    <li class="list-group-item">Suhu Rendah: <?= $data->suhu_rendah ?></li>
                    <li class="list-group-item">Suhu Sedang: <?= $data->suhu_sedang ?></li>
                    <li class="list-group-item">Suhu Tinggi: <?= $data->suhu_tinggi ?></li>
                </div>

                <!-- Fungsi keanggotaan Kelembapan -->
                <div class="mt-4">
                    <h5>Fungsi keanggotaan Kelembapan</h5>
                    <img src="<?= base_url('assets/img/kelembapan.png') ?>" class="img-fluid" alt="Fungsi keanggotaan Kelembapan">
                    <li class="list-group-item">Kelembapan Rendah: <?= $data->kelembapan_rendah ?></li>
                    <li class="list-group-item">Kelembapan Sedang: <?= $data->kelembapan_sedang ?></li>
                    <li class="list-group-item">Kelembapan Tinggi: <?= $data->kelembapan_tinggi ?></li>
                </div>

                <!-- Daftar Rule -->
                <div class="mt-4">
                    <h5>Daftar Rule</h5>
                    <img src="<?php echo base_url();?>assets/img/rule.png"  class="img-fluid" alt="Daftar Rule">
                    <h6>Daftar Rule Yang digunakan</h6>
                    <ul class="list-group">
                        <?php for ($i = 1; $i <= 9; $i++) { ?>
                            <li class="list-group-item">Penyebaran Penyakit Rule <?= $i ?>: <?= $data->{'penyebaran_penyakit_rule' . $i} ?></li>
                        <?php } ?>
                    </ul>
                </div>

                <!-- Deffuzifikasi -->
                <div class="mt-4">
                    <h5>Deffuzifikasi</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Nilai a1: <?= $data->a1 ?></li>
                        <li class="list-group-item">Nilai a2: <?= $data->a2 ?></li>
                        <li class="list-group-item">Nilai a3: <?= $data->a3 ?></li>
                        <li class="list-group-item">Nilai m1: <?= $data->m1 ?></li>
                        <li class="list-group-item">Nilai m2: <?= $data->m2 ?></li>
                        <li class="list-group-item">Nilai m3: <?= $data->m3 ?></li>
                    </ul>
                    <img src="<?= base_url('assets/img/penyebaran.png') ?>" class="img-fluid mt-3" alt="Deffuzifikasi">
                    <li class="list-group-item">Nilai Titik Pusat: <?= $data->m1 ?>+<?= $data->m2 ?>+<?= $data->m3 ?>/<?= $data->a1 ?>+<?= $data->a2 ?>+<?= $data->a3 ?> = <?= $data->titik_pusat ?>%</li>
                </div>

                <div class="mt-4">
                <h5>Solusi Penyakit <?= $data->kode_penyakit ?> <?= $data->nama ?></h5>
                <ul class="list-group">
                        <li class="list-group-item"> Cara Penanganan: <?= $data->solusi ?></li>
                    </ul>
                </div>
                <!-- Tambahkan item sesuai dengan data hasil diagnosa yang lain -->
            <?php } ?>
        </div>
    </div>
</div>
