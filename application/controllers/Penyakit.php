<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

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
	$this->load->model('M_Penyakit');
	}

    public function add_data()
	{
		// $this->form_validation->set_rules('kode_gejala', 'kode_gejala', 'required|trim|is_unique[gejala.kode_gejala]|min_length[16]|max_length[17]');
       
	$data ['kode_penyakit'] = $this->input->post('kode_penyakit');
	$data ['nama'] = $this->input->post('nama');
	

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
		$this->M_Penyakit->add_data('penyakit',$data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<div class="d-flex align-items-center justify-content-start">
		  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
		  <span><strong>Well done!</strong> Successful Create Data Penyakit </span>
		</div><!-- d-flex -->
	  </div><!-- alert -->');
	  
	redirect('Dashboard/lihat_penyakit','refresh');
	}
	// 	else{
	// 		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
	// 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 	  <span aria-hidden="true">&times;</span>
	// 	</button>
	// 	<div class="d-flex align-items-center justify-content-start">
	// 	  <i class="icon ion-ios-close alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
	// 	  <span><strong>Kode Gejala error or is already available </span>
	// 	</div><!-- d-flex -->
	//   </div><!-- alert -->');
	//   redirect('Dashboard/form_gejala','refresh');
	// 	}  
	// }

	public function edit_data($kode_penyakit){
		$where = array('kode_penyakit' => $kode_penyakit);
		$data['penyakit'] = $this->M_Penyakit->edit_data('penyakit', $where)->result();
		$data['content']='Penyakit/edit_penyakit';
		$this->load->view('template',$data);
		}
		public function update($kode_penyakit)
		{
			$data ['kode_penyakit'] = $this->input->post('kode_penyakit');
			$data ['nama'] = $this->input->post('nama');
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
		$where = array('kode_penyakit' => $kode_penyakit);
		$this->M_Penyakit->update($where, $data, 'penyakit');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<div class="d-flex align-items-center justify-content-start">
		  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
		  <span><strong>Well done!</strong> Successful Update Data Penyakit </span>
		</div><!-- d-flex -->
	  </div><!-- alert -->');
		redirect('Dashboard/lihat_penyakit','refresh');
	}

	public function delete($kode_penyakit)
		{
		$where = array('kode_penyakit' => $kode_penyakit );
		$this->M_Penyakit->delete($where);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<div class="d-flex align-items-center justify-content-start">
		  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
		  <span><strong>Well done!</strong> Successful Delete Data Penyakit </span>
		</div><!-- d-flex -->
	  </div><!-- alert -->');
		redirect('dashboard/lihat_penyakit','refresh');
		}
		
		public function get_nama() {
			$kodepenyakit1 = $this->input->get('kode_penyakit1');
			// Mengambil data nama dari model (gantikan dengan logika Anda)
			$nama = $this->M_Penyakit->getNamabykode1($kodepenyakit1);
			// Mengembalikan data dalam format JSON
			$response = array('nama' => $nama);
			echo json_encode($response);
}
	
		public function export_pdf()
		{
		$this->load->library('mypdfgenerator');
		$data['title'] = "Data Penduduk";
		$data['penduduk'] = $this->M_penduduk->show_data()->result();
		$this->mypdfgenerator->generate('penduduk/print_penduduk',$data);
		}
		public function print_mahasiswa($id_mhs)
		{
		$this->load->library('mypdfgenerator');
		$data['title'] = "Detail Mahasiswa";
		$where = array('id_mhs' => $id_mhs);
		$data['tbl_mahasiswa'] = $this->M_mahasiswa->edit_data('tbl_mahasiswa', $where)->result();
		$this->mypdfgenerator->generate('admin/print_mahasiswa',$data);
		}

		public function export_excelall(){
			$data = array( 'title' => 'Laporan Data Excel Penduduk');
			$data['penduduk'] = $this->M_penduduk->show_data()->result();
			$this->load->view('penduduk/print_excel',$data);
			}
	}

