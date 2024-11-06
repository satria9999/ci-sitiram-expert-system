<!-- ########## START: MAIN PANEL ########## -->

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Tables</a>
    <span class="breadcrumb-item active">Data Table</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Data Diagnosa</h5>
        <p>Data Hasil Diagnosa</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Tabel History Diagnosa</h6>
        <p class="mg-b-20 mg-sm-b-30">Searching, ordering, and paging goodness will be immediately added to the
            table, as shown in this example.</p>

        <div class="table-container" style="overflow-x: auto;">
            <table id="datatable1" class="table display responsive nowrap" style="font-size: 80%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>kode Penyakit</th>
                        <th>Nama Penyakit</th>
                        <th>Nilai Titik Pusat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($diagnosa as $key) {
                        $no++;?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $key->kode_penyakit; ?></td>
                            <td><?php echo $key->nama; ?></td>
                            <td><?php echo $key->titik_pusat; ?></td>
                            <td>
                                <a href="<?php echo site_url('Dashboard/hasil_diagnosa/'. $key->id_diagnosa); ?>"
                                   class="btn btn-success btn-circle btn-sm">Lihat
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
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
