<?php 

class Siswa_model extends CI_Model{
	public function getAllSiswa(){
		return $this->db->get('siswa')->result_array();
	}

	public function tambahDataSiswa(){
		$data = [
			'nis' => $this->input->post('nis', true),
			'nama' => $this->input->post('nama', true),
			'email' => $this->input->post('email', true),
			'jurusan' => $this->input->post('jurusan', true)
		];

		$this->db->insert('siswa', $data);
	}

	public function hapuDataSiswa($id){
		$this->db->delete('siswa', ['id' => $id]);
	}

	public function getSiswaById($id){
		return $this->db->get_where('siswa', ['id' => $id])->row();
	}

	public function ubahDataSiswa(){
		$data = [
			'nis' => $this->input->post('nis', true),
			'nama' => $this->input->post('nama', true),
			'email' => $this->input->post('email', true),
			'jurusan' => $this->input->post('jurusan', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('siswa', $data);
	}	

	public function cariDataSiswa(){
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('nis', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('jurusan', $keyword);
		return $this->db->get('siswa')->result_array();
	}
}