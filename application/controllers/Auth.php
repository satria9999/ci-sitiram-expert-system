<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$this->load->library('form validation');
class Auth extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->library('form_validation');
$this->load->model('M_auth');
}
public function index()
{
    $this->form_validation->set_rules('nama','nama','required|trim');
    $this->form_validation->set_rules('password','Password','required|trim');
    if ($this->form_validation->run('login') == false) {
        $this->load->view('auth/login');
    } else {
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        $user = $this->M_auth->get_user_data($nama);
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'nama' => $user['nama'],
                    'email' => $user['email'],
                    'kategori' => $user['kategori'],
                    'id_user' => $user['id_user']
                ];
                if ($user['kategori'] == 'admin') {
                    $this->session->set_userdata($data);
                    redirect('Dashboard/Dashboard');
                } elseif ($user['kategori'] == 'petani') {
                    $this->session->set_userdata($data);
                    redirect('Dashboard_petani/Dashboard_petani');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
            redirect('auth');
        }
    }
}

public function register()
	{
	$this->form_validation->set_rules('nama', 'nama', 'required|trim');
	$this->form_validation->set_rules('email', 'email',
	'required|trim|valid_email|is_unique[auth.email]',
	[
	'is_unique' => 'This email has already registered!'
	]
	);
$this->form_validation->set_rules('password', 'password','required|trim|min_length[8]|matches[password]',['matches' => 'Password dont match!','min_length' => 'Password too short!'
]
);

$this->form_validation->set_rules('password','password','required|trim|matches[password]');

	if($this->form_validation->run('register') == false) { //kalau gagal
	$this->load->view('auth/register');
	} else { //kalau berhasil
	$data = [

		'nama' => htmlspecialchars($this->input->post('nama', true)),
		'email' => htmlspecialchars($this->input->post('email', true)),
		'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
		'kategori' =>'petani'
		];
		$this->M_auth->insert_user_data($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created.</div>');
		redirect('auth');
		}
	}
    
public function logout()
{
$this->session->sess_destroy();
redirect('Auth','refresh');
}
}