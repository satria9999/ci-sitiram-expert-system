<!DOCTYPE html>
<html>
<head>
    <title>Hasil Diagnosa</title>
    <style>
        .container {
            margin-top: 5rem;
        }

        .card-header {
            background-color: #343a40;
            color: #fff;
        }

        .fungsi-keanggotaan {
            margin-top: 0,5rem;
        }

        .fungsi-keanggotaan h5 {
            margin-bottom: 0.2rem;
        }

        .daftar-rule {
            margin-top: 1rem;
        }

        .daftar-rule h5 {
            margin-bottom: 0.2rem;
        }

        .deffuzifikasi {
            margin-top: 1rem;
        }

        .deffuzifikasi h5 {
            margin-bottom: 0.2rem;
        }

        .solusi-penyakit {
            margin-top: 1rem;
        }

        .solusi-penyakit h5 {
            margin-bottom: 0.2rem;
        }

        .list-group-item {
            padding: 0.2rem;
        }

        .list-group {
            margin-bottom: 0;
        }
    .fungsi-keanggotaan img {
        width: 100%;
        max-width: 400px;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    .deffuzifikasi img {
        width: 100%;
        max-width: 600px;
        height: auto;
        display: block;
        margin: 0 auto;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
        
               
            <center><h2> Hasil Diagnosa</h2></center>
            <div class="card-body">
                <!-- Tampilkan informasi hasil diagnosa di sini -->
                <?php foreach ($diagnosa as $data) { ?>
                    <ul class="list-group">
                        <li class="list-group-item">Nilai Suhu yang dimasukkan: <?= $data->suhu ?></li>
                        <li class="list-group-item">Nilai Kelembapan: <?= $data->kelembapan ?></li>
                        <li class="list-group-item">Terdiagnosa Penyakit: <?= $data->kode_penyakit ?> <?= $data->nama ?></li>
                    </ul>

                    <div class="fungsi-keanggotaan">
                        <h5>Fungsi Keanggotaan Suhu</h5>
                        <img src="<?= base_url('assets/img/suhu.png') ?>" class="img-fluid" alt="Fungsi keanggotaan Suhu">
                        <ul class="list-group">
                            <li class="list-group-item">Suhu Rendah: <?= $data->suhu_rendah ?></li>
                            <li class="list-group-item">Suhu Sedang: <?= $data->suhu_sedang ?></li>
                            <li class="list-group-item">Suhu Tinggi: <?= $data->suhu_tinggi ?></li>
                        </ul>
                    </div>

                    <div class="fungsi-keanggotaan">
                        <h5>Fungsi Keanggotaan Kelembapan</h5>
                        <img src="<?= base_url('assets/img/kelembapan.png') ?>" class="img-fluid" alt="Fungsi keanggotaan Kelembapan">
                        <ul class="list-group">
                            <li class="list-group-item">Kelembapan Rendah: <?= $data->kelembapan_rendah ?></li>
                            <li class="list-group-item">Kelembapan Sedang: <?= $data->kelembapan_sedang ?></li>
                            <li class="list-group-item">Kelembapan Tinggi: <?= $data->kelembapan_tinggi ?></li>
                        </ul>
                    </div>

                    <div class="daftar-rule">
                        <h5>Daftar Rule</h5>
                        <img src="<?php echo base_url(); ?>assets/img/ruleprint.png">
                        <h6>Daftar Rule yang digunakan</h6>
                        <ul class="list-group">
                            <?php for ($i = 1; $i <= 9; $i++) { ?>
                                <li class="list-group-item">Penyebaran Penyakit Rule <?= $i ?>: <?= $data->{'penyebaran_penyakit_rule' . $i} ?></li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="deffuzifikasi">
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
                        <li class="list-group-item">Nilai Titik Pusat: <?= $data->m1 ?>+<?= $data->m1 ?>+<?= $data->m3 ?>/<?= $data->a1 ?>+<?= $data->a2 ?>+<?= $data->a3 ?> = <?= $data->titik_pusat ?>%</li>
                    </div>

                    <div class="solusi-penyakit">
                        <h5>Solusi Penyakit <?= $data->kode_penyakit ?> <?= $data->nama ?></h5>
                        <ul class="list-group">
                            <li class="list-group-item">Cara Penanganan: <?= $data->solusi ?></li>
                        </ul>
                    </div>

                    <!-- Tambahkan item sesuai dengan data hasil diagnosa yang lain -->
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>