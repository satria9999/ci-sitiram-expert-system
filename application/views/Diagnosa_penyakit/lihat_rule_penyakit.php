<!-- ########## START: MAIN PANEL ########## -->
<?= $this->session->flashdata('message'); ?>
<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Tables</a>
    <span class="breadcrumb-item active">Data Table</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Data Rule Penyakit</h5>
        <p>Data-data Rule Penyakit</p>
        <a href="<?php echo base_url('Dashboard/form_rule_penyakit');?>"
       class="btn btn-primary btn-circle btn-sm" style="display: flex; align-items: center; max-width:100px">
        <ion-icon name="add-circle-outline" style="font-size: 1rem; margin-right: 5px;"></ion-icon>
        Tambah
    </a>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Tabel Penyakit</h6>
        <p class="mg-b-20 mg-sm-b-30">Searching, ordering, and paging goodness will be immediately added to the
            table, as shown in this example.</p>

        <div class="table-container" style="overflow-x: auto;">
            <table id="datatable1" class="table display responsive nowrap" style="font-size: 80%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Rule</th>
                        <th>Kode Penyakit</th>
                        <th>Nama Penyakit</th>
                        <th>Kode Gejala 1</th>
                        <th>Kode Gejala 2</th>
                        <th>Kode Gejala 3</th>
                        <th>Kode Gejala 4</th>
                        <th>Kode Gejala 5</th>
                        <th>Kode Gejala 6</th>
                        <th>Solusi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($diagnosa_penyakit as $key) {
                        $no++;?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $key->rule; ?></td>
                            <td><?php echo $key->kode_penyakit; ?></td>
                            <td><?php echo $key->nama; ?></td>
                            <td><?php echo $key->kode_gejala1; ?></td>
                            <td><?php echo $key->kode_gejala2; ?></td>
                            <td><?php echo $key->kode_gejala3; ?></td>
                            <td><?php echo $key->kode_gejala4; ?></td>
                            <td><?php echo $key->kode_gejala5; ?></td>
                            <td><?php echo $key->kode_gejala6; ?></td>
                            <td><?php echo $key->solusi; ?></td>
                            <td>
                            <a href="<?php echo site_url('Diagnosa_Penyakit/edit_data/'. $key->rule); ?>"
                                
                                class="btn btn-warning btn-circle btn-sm">
                                <ion-icon name="create-outline" style="font-size: 1rem; margin-right: 5px;"></ion-icon>edit
                             </a>
                             <a href="<?php echo site_url('Diagnosa_Penyakit/delete/'. $key->rule); ?>"
                                class="btn btn-danger btn-circle btn-sm" onclick="myFunction();">
                                <ion-icon name="trash-outline" style="font-size: 1rem; margin-right: 5px;"></ion-icon>delete
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
