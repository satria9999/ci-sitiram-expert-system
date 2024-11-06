<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	$this->load->model('M_diagnosa');
	}
	public function Dashboard()
	{
		$data['jumlahPenyakit'] = $this->M_Penyakit->hitungJumlahPenyakit();
	
		if ($data['jumlahPenyakit'] === false || $data['jumlahPenyakit'] === 0) {
			log_message('error', 'Gagal mendapatkan jumlah penyakit dari model.');
		}
	
		$data['jumlah_gejala'] = $this->M_Gejala->hitungJumlahgejala();
	
		if ($data['jumlah_gejala'] === false || $data['jumlah_gejala'] === 0) {
			log_message('error', 'Gagal mendapatkan jumlah gejala dari model.');
		}

		$data['jumlah_rule'] = $this->M_Diagnosa_Penyakit->hitungJumlahrule();
	
		if ($data['jumlah_rule'] === false || $data['jumlah_rule'] === 0) {
			log_message('error', 'Gagal mendapatkan jumlah rule dari model.');
		}

		$data['jumlah_diagnosa'] = $this->M_diagnosa->hitungJumlahdiagnosa();
	
		if ($data['jumlah_diagnosa'] === false || $data['jumlah_diagnosa'] === 0) {
			log_message('error', 'Gagal mendapatkan jumlah diagnosa dari model.');
		}
		$data['content']='content';
		$this->load->view('template',$data);
	}
	public function fungsi_keanggotaan()
	{
		$data['content']='informasi/fungsi_keanggotaan';
		$this->load->view('template',$data);
	}
	public function informasi_penyakit()
	{
		$data['content']='informasi/informasi_penyakit';
		$this->load->view('template',$data);
	}
	public function form_gejala()
	{
		$data['content']='Gejala/form_gejala';
		$this->load->view('template',$data);
	}
	public function form_penyakit()
	{
		$data['content']='Penyakit/form_penyakit';
		$this->load->view('template',$data);
	}
	public function form_diagnosa_penyakit()
	{
		$data['gejala'] = $this->M_Gejala->show_data()->result();
		$data['content']='Diagnosa/form_diagnosa_penyakit';
		$this->load->view('template',$data);
	}
	public function form_rule_penyakit()
	{
		$data['penyakit'] = $this->M_Penyakit->show_data()->result();
		$data['gejala'] = $this->M_Gejala->show_data()->result();
		$data['content']='Diagnosa_penyakit/form_rule_penyakit';
		$this->load->view('template',$data);
	}
	public function lihat_gejala()
	{
		$data['gejala'] = $this->M_Gejala->show_data()->result();
		$data['content']='Gejala/lihat_gejala';
		$this->load->view('template',$data);
	}
	public function lihat_penyakit()
	{
		$data['penyakit'] = $this->M_Penyakit->show_data()->result();
		$data['content']='Penyakit/lihat_penyakit';
		$this->load->view('template',$data);
	}
	public function history_diagnosa()
	{
		$data['diagnosa'] = $this->M_diagnosa->show_data()->result();
		$data['content']='Diagnosa/history_diagnosa';
		$this->load->view('template',$data);
	}
	public function lihat_rule_penyakit()
	{
		$data['diagnosa_penyakit'] = $this->M_Diagnosa_Penyakit->show_data()->result();
		$data['content']='Diagnosa_penyakit/lihat_rule_penyakit';
		$this->load->view('template',$data);
	}
	public function hasil_diagnosa($id_diagnosa)
	{
		$where = array('id_diagnosa' => $id_diagnosa);
		$data['diagnosa'] = $this->M_diagnosa->show_diagnosa($where)->result(); // Menggunakan $where pada show_data
		$data['content'] = 'Diagnosa/hasil_diagnosa';
		$this->load->view('template', $data);
	}	
	public function result_view($id_diagnosa) {
		// Load your model to fetch data based on id_diagnosa
		$this->load->model('M_diagnosa');
	
		// Assuming you have a model function to get data by id_diagnosa
		$diagnosaData = $this->M_diagnosa->getDiagnosaById($id_diagnosa);
	
		if (!empty($diagnosaData)) {
			// Pass the retrieved data to the view
			$data['diagnosaData'] = $diagnosaData;
			$data['content'] = 'Diagnosa/form_diagnosa';
			$this->load->view('template', $data);
		} else {
			// Handle the case where no data is found for the given id_diagnosa
			echo 'No data found for id_diagnosa: ' . $id_diagnosa;
		}
	}
	
}
