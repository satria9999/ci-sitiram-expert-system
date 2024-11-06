<!-- ########## START: MAIN PANEL ########## -->

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Tables</a>
    <span class="breadcrumb-item active">Data Table</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Data Informasi Penyakit</h5>
        <p>Data-data Informasi Penyakit</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Tabel Informasi Penyakit</h6>

        <div class="table-container" style="overflow-x: auto;">
            <table id="datatable1" class="table display responsive nowrap" style="font-size: 80%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Penyakit</th>
                        <th>Nama Penyakit</th>
                        <th>Deksripsi</th>
                        <th>Gejala yang muncul</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                         $no = 0;
                             $no++;?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>P1</td>
                            <td>Bercak Kuning (Pseudomonas agarici)</td>
                            <td>Karena kelembapan yang berlebihan yang sering muncul pada jamur tiram. Kelembapan atau terlalu banyaknya air pada bagian kelopak jamur sehingga menyebabkan bercak kuning di bagian kelopak pada jamur tiram.</td>
                            <td>
                                <ul>
                                    <li>Muncul bercak</li>
                                    <li>Bercak berwarna kuning</li>
                                    <li>Busuk</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>P2</td>
                            <td>Buto hijau (Chetemium SPP)</td>
                            <td>Pada baglog jamur tiram terdapat noda hijau, yang dapat mengakibatkan perakaran jamur lemah sehingga jamur tiram akan rontok.</td>
                            <td>
                                <ul>
                                    <li>Pertumbuhan miselium jamur tidak normal</li>
                                    <li>Busuk</li>
                                    <li>Muncul flek hijau</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>P3</td>
                            <td>Buto ireng (Mucor SPP)</td>
                            <td>Terdapat noda hitam pada bagian baglog atau media tumbuh substrat, sehingga menyebabkan tanaman rusak dan bahkan pertumbuhan akan terhambat serta jamur tiram akan mati.</td>
                            <td>
                                <ul>
                                    <li>Muncul bercak</li>
                                    <li>Muncul flek hijau</li>
                                    <li>Terjadi Kontaminasi dibagian media baglog</li>
                                    <li>Munculnya benjolan mirip kacang hijau berwarna hitam</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>P4</td>
                            <td>Buto Coklat (Penicilium SPP)</td>
                            <td>tumbuh miselium berwarna coklat tua (merah tua), yang dapat mengakibatkan jamur abnormal dan bahkan mati.</td>
                            <td>
                                <ul>
                                    <li>Muncul bercak</li>
                                    <li>Muncul flek hijau</li>
                                    <li>Bercak Berwarna Coklat</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>P5</td>
                            <td>Buto Orange (Neurospora SPP)</td>
                            <td>Terdapat tepung berwarna orange pada
permukaan dan menyumbat baglog
sehingga mengakibatkan pertumbuhan
miselium terhambat.</td>
                            <td>
                                <ul>
                                    <li>Muncul flek hijau</li>
                                    <li>Menghasilkan tepung warna orange</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>P6</td>
                            <td>Virus</td>
                            <td>Infeksi virus pada jamur tiram dapat
menyebar melalui kontak langsung antara
jamur yang terinfeksi dengan yang sehat,
atau melalui kontaminasi lingkungan
seperti alat, media tanam, atau bahan
organik lainnya yang terkontaminasi virus.</td>
                            <td>
                                <ul>
                                    <li>Pertumbuhan tubuh tidak normal</li>
                                    <li>Tangkai tumbuh memanjang</li>
                                    <li>Tudung tidak tampak mekar</li>
                                    <li>Terjadi dibagian tudung</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>P7</td>
                            <td>Bacterium carotovorum</td>
                            <td>bakteri patogen yang dapat menginfeksi jamur tiram dan menyebabkan penyakit yang dikenal sebagai Busuk Basah pada jamur tiram.</td>
                            <td>
                                <ul>
                                    <li>Terdapat bintik kuning</li>
                                    <li>Lama kelamaan bitnik menjadi coklat</li>
                                    <li>Lama kelamaan menjadi hitam</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>P8</td>
                            <td>Aspergillus SPP</td>
                            <td>penyakit yang dikenal sebagai Aspergillosis pada jamur tiram. Infeksi ini biasanya terjadi pada tahap pertumbuhan miselium dan dapat
mengakibatkan perubahan warna, struktur, dan kualitas umum dari jamur tiram yang terinfeksi.</td>
                            <td>
                                <ul>
                                    <li>Terjadi Kontaminasi dibagian media baglog</li>
                                    <li>Berwarna hijau seperti lumut</li>
                                    <li>Jika dipegang terasa seperti lender</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>H1</td>
                            <td>Laba-laba (Areneae sp)</td>
                            <td>hewan yang suka memakan miselium dan
bagian pada jamur. Selain itu laba-laba juga
menyebabkan spora jamur terganggu.</td>
                            <td>
                                <ul>
                                    <li>Jamur tiram batangnya berlubang</li>
                                    <li>Jamur tiram tidak tumbuh besar</li>
                                    <li>Jamur tiram tidak terlihat tumbuh sama sekali</li>
                                    <li>Ruang kumbung kotor</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>H2</td>
                            <td>Rayap (Isoptera)</td>
                            <td>hama ini terlihat jika serangga sudah
menimbulkan kerusakan. Umumnya
hama ini akan merusak baglog atau jamur
yang sudah tumbuh sehingga tanaman
menjadi rusak dan menyebabkan tanaman muda mati.</td>
                            <td>
                                <ul>
                                    <li>Jamur tiram batangnya berlubang</li>
                                    <li>Jamur tiram tidak tumbuh besar</li>
                                    <li>Kumbung jamur tiram rapuh</li>
                                    <li>Pertumbuhan jamur tiram lambat</li>
                                    <li>Timbul tanah di sekitar baglog</li>
                                    <li>Plastik baglog berlubang</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>H3</td>
                            <td>Lalat (Licoriella sp)</td>
                            <td>menyerang jamur tiram melalui lubang kecil yang tidak terdeteksi, kemudian meletakkan telurnya di baglog / tempat bibit jamur diletakkan. Larva tersebut
akan menyerang batang jamur dan
membuat pertumbuhan jamur akan
terhambat serta bahan jamur tidak akan
tumbuh sama sekali</td>
                            <td>
                                <ul>
                                    <li>Jamur tiram batangnya berlubang</li>
                                    <li>Jamur tiram tidak tumbuh besar</li>
                                    <li>Jamur tiram terlihat keriput</li>
                                    <li>Miselium jamur tiram membusuk</li>
                                    <li>Kumbung jamur tiram rapuh</li>
                                </ul>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div><!-- table-container -->
    </div><!-- card -->
</div><!-- card -->

<!-- ########## END: MAIN PANEL ########## -->
<script>
    $(function(){
        'use strict';

        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
    });
</script>
