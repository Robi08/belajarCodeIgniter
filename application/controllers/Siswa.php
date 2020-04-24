<?php 

class Siswa extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Siswa_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['judul'] = 'Siswa';
		$data['siswa'] = $this->Siswa_model->getAllSiswa();
		if($this->input->post('keyword')){
			$data['siswa'] = $this->Siswa_model->cariDataSiswa();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('siswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$data['judul'] = 'Form Tambah Data';

		// validation 
		$rules = [
        [
          'field' => 'nis',
          'label' => 'Nis',
          'rules' => 'required|numeric'
        ],
        [
          'field' => 'nama',
          'label' => 'Nama',
          'rules' => 'required'
        ],
        [
          'field' => 'email',
          'label' => 'Email',
          'rules' => 'required|valid_email'
        ]
		];
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

	 	if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('siswa/tambah');
			$this->load->view('templates/footer');
    } else {
      $this->Siswa_model->tambahDataSiswa();
      $this->session->set_flashdata('aksi', 'ditambahkan');
      redirect('siswa');
    }
	}

	public function hapus($id){
	  $this->Siswa_model->hapuDataSiswa($id);
    $this->session->set_flashdata('aksi', 'dihapus');
    redirect('siswa');
     
	}

	public function detail($id){
		$data['judul'] = 'Detail Siswa';
		$data['siswa'] = $this->Siswa_model->getSiswaById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('siswa/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id){
		$data['judul'] = 'Form Ubah Data';
		$data['siswa'] = $this->Siswa_model->getSiswaById($id);
		$data['jurusan'] = ['Rekayasa Perangkat Lunak', 'Teknik Komputer Jaringan', 'Administrasi Perkantoran', 'Akuntansi', 'Pemasaran'];

		// validation 
		$rules = [
        [
          'field' => 'nis',
          'label' => 'Nis',
          'rules' => 'required|numeric'
        ],
        [
          'field' => 'nama',
          'label' => 'Nama',
          'rules' => 'required'
        ],
        [
          'field' => 'email',
          'label' => 'Email',
          'rules' => 'required|valid_email'
        ]
		];
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

	 	if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('siswa/ubah', $data);
			$this->load->view('templates/footer');
    } else {
      $this->Siswa_model->ubahDataSiswa();
      $this->session->set_flashdata('aksi', 'diubah');
      redirect('siswa');
    }
	}
}