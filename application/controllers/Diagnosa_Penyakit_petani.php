<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa_Penyakit_petani extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
	{
	parent ::__construct();
	$this->load->model('M_Diagnosa_Penyakit');
	$this->load->model('M_Gejala');
	$this->load->model('M_Penyakit');
	$this->load->model('M_diagnosa');
	}

	public function cek_penyakit_petani() {
		$selectedGejala = $this->input->post('gejala');

        if (!empty($selectedGejala)) {
            // Load the Diagnosa_model
            $this->load->model('M_Diagnosa_Penyakit');
			$diagnosisInfo = $this->M_Diagnosa_Penyakit->getDiagnosisInfo($selectedGejala);

            if (!empty($diagnosisInfo)) {
                // Process the diagnosis information (you might want to display them or perform further actions)
                foreach ($diagnosisInfo as $diagnosis) {
                    // echo 'Kode Penyakit: ' . $diagnosis['kode_penyakit'] . '<br>';
                    // echo 'Nama Penyakit: ' . $diagnosis['nama'] . '<br>';
                    // echo 'Solusi: ' . $diagnosis['solusi'] . '<br>';
                    // echo '--------------------------<br>';
					$data = array(
						'kode_penyakit' => $diagnosis['kode_penyakit'],
						'nama' => $diagnosis['nama'],
						'solusi' => $diagnosis['solusi'],
						// Add other keys as needed based on your database schema
					);
					// print_r($data);
					// Insert data into the database
					$this->load->model('M_diagnosa');
					$this->M_diagnosa->add_diagnosa('diagnosa', $data);
					// $this->db->db_debug = TRUE;
					// echo $this->db->last_query();
					// Get the inserted ID
				$id_diagnosa = $this->db->insert_id();

				// Redirect with the ID
				redirect('Dashboard_petani/result_view_petani/' . $id_diagnosa);

                }
            } else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<div class="d-flex align-items-center justify-content-start">
			<i class="icon ion-ios-close alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
			<span><strong>Sorry!</strong> no disease was found</span>
			</div><!-- d-flex -->
		</div><!-- alert -->');
			redirect('Dashboard_petani/form_diagnosa_penyakit_petani','refresh');
            }
        } else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<div class="d-flex align-items-center justify-content-start">
			<i class="icon ion-ios-close alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
			<span><strong>Sorry!</strong> No gejala selected</span>
			</div><!-- d-flex -->
		</div><!-- alert -->');
			redirect('Dashboard_petani/form_diagnosa_penyakit_petani','refresh');
        }
    }
	
}

?>