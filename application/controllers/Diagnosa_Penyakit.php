<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa_Penyakit extends CI_Controller {

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

	public function add_data()
	{
		// $this->form_validation->set_rules('kode_gejala', 'kode_gejala', 'required|trim|is_unique[gejala.kode_gejala]|min_length[16]|max_length[17]');
	$data ['rule'] = $this->input->post('rule');   
	$data ['kode_penyakit'] = $this->input->post('kode_penyakit');
	$data ['nama'] = $this->input->post('nama');
	$data ['kode_gejala1'] = $this->input->post('kode_gejala1');
	$data ['kode_gejala2'] = $this->input->post('kode_gejala2');
	$data ['kode_gejala3'] = $this->input->post('kode_gejala3');
	$data ['kode_gejala4'] = $this->input->post('kode_gejala4');
	$data ['kode_gejala5'] = $this->input->post('kode_gejala5');
	$data ['kode_gejala6'] = $this->input->post('kode_gejala6');
	$data ['solusi'] = $this->input->post('solusi');
	

	// // upload a picture
	// $config['upload_path'] = './uploads/';
	// $config['allowed_types'] = 'gif|jpg|jpeg|png';
	// $config['overwrite'] = TRUE;
	// $config['max_size'] = '500000';
	// $config['file_name'] = time();

	// $this->load->library('upload', $config);
	// $this->upload->initialize($config);
	// if(!$this->upload->do_upload('image')) {
	// $error_image = $this->upload->display_errors();
	// $this->session->set_flashdata('error', $error_image);
	// redirect('dashboard/data_mhs');
	// } else {
	// $img = $this->upload->data();
	// }
	// $data ['foto'] = './uploads/' . time() . $img['file_ext'];
    // if($this->form_validation->run() == TRUE) {
		$this->M_Diagnosa_Penyakit->add_data('diagnosa_penyakit',$data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<div class="d-flex align-items-center justify-content-start">
		  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
		  <span><strong>Well done!</strong> Successful Create Data Rule </span>
		</div><!-- d-flex -->
	  </div><!-- alert -->');
	  
	redirect('Dashboard/lihat_rule_penyakit','refresh');
	}

	public function edit_data($rule){
		$where = array('rule' => $rule);
		$data['Diagnosa_Penyakit'] = $this->M_Diagnosa_Penyakit->edit_data('diagnosa_penyakit', $where)->result();
		$data['content']='Diagnosa_penyakit/edit_rule_penyakit';
		$this->load->view('template',$data);
		}
		public function update($rule)
		{
			$data ['rule'] = $this->input->post('rule');   
			$data ['kode_penyakit'] = $this->input->post('kode_penyakit');
			$data ['nama'] = $this->input->post('nama');
			$data ['kode_gejala1'] = $this->input->post('kode_gejala1');
			$data ['kode_gejala2'] = $this->input->post('kode_gejala2');
			$data ['kode_gejala3'] = $this->input->post('kode_gejala3');
			$data ['kode_gejala4'] = $this->input->post('kode_gejala4');
			$data ['kode_gejala5'] = $this->input->post('kode_gejala5');
			$data ['kode_gejala6'] = $this->input->post('kode_gejala6');
			$data ['solusi'] = $this->input->post('solusi');
		// upload a picture
		// $config['upload_path'] = './uploads/';
		// $config['allowed_types'] = 'gif|jpg|jpeg|png';
		// $config['overwrite'] = TRUE;
		// $config['max_size'] = '500000';
		// $config['file_name'] = time();
		// $this->load->library('upload', $config);
		// $this->upload->initialize($config);
		// if(!$this->upload->do_upload('image')) {
		// $error_image = $this->upload->display_errors();
		// $this->session->set_flashdata('error', $error_image);
		// redirect('dashboard/data_mhs');
		// } else {
		// $img = $this->upload->data();
		// }
		// $data ['foto'] = './uploads/' . time() . $img['file_ext'];
		$where = array('rule' => $rule);
		$this->M_Diagnosa_Penyakit->update($where, $data, 'diagnosa_penyakit');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<div class="d-flex align-items-center justify-content-start">
		  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
		  <span><strong>Well done!</strong> Successful Update Data Rule Penyakit </span>
		</div><!-- d-flex -->
	  </div><!-- alert -->');
		redirect('Dashboard/lihat_rule_penyakit','refresh');
	}
	public function cek_penyakit() {
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
				redirect('Dashboard/result_view/' . $id_diagnosa);

                }
            } else {
                echo 'No diagnosis information found';
            }
        } else {
            echo 'No gejala selected';
        }
    }

	public function delete($rule)
	{
	$where = array('rule' => $rule );
	$this->M_Diagnosa_Penyakit->delete($where);
	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
	<div class="d-flex align-items-center justify-content-start">
	  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
	  <span><strong>Well done!</strong> Successful Delete Data Rule Penyakit</span>
	</div><!-- d-flex -->
  </div><!-- alert -->');
	redirect('dashboard/lihat_rule_penyakit','refresh');
	}
	
}

?>