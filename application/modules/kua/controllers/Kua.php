<?php

class Kua extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("auth"));
		}
		$this->load->model('M_kua');
		$this->load->library('form_validation');
		$this->load->model('template/Model_template', 'mt');
		$this->load->helper('tgl_indo');
	}

	public function getUserLogin()
	{
		if ($this->session->userdata('nik')) {
			$getUser = $this->mt->getWhere('t_user', ['nik' => $this->session->userdata('nik')]);
			if ($getUser->num_rows() > 0) {
				$row = $getUser->row_array();
				$dataLogin = [
					'nik' => $row['nik'],
					'nama' => $row['name'],
					'email' => $row['email'],
					'username' => $row['username'],
					'avatar' => $row['avatar'],
					'role' => $row['role'],
					'created_at' => $row['created_at'],
					'last_login' => $row['last_login']
				];
				return $dataLogin;
			}
		}
	}

	public function index()
	{
		$r['menu'] = 'template/menu/v_menuIslogin';
		$r['isActiveMenu'] = 'kua';
		$r['breadcrumb'] = 'Home';
		$r['judul'] = 'KUA';
		$r['subJudul'] = 'Data Formulir KUA';
		$r['content'] = 'kua/v_kua';
		$r['style'] = 'template/assets/css/permohonan-css';
		$r['script'] = 'template/assets/js/permohonan-js';
		$result = $this->db->get('t_formulir_kua')->result_array();
		if (isset($result)) {
			$r['dataKua'] = $result;
		} else {
			$r['dataKua'] = 'Data tidak ditemukan';
		}
		$r['dataLogin'] = Modules::run('template/getUserLogin');
		echo Modules::run('template/templateIsLogin', $r);
	}

	public function create_page()
	{
		$r['menu'] = 'template/menu/v_menuIslogin';
		$r['isActiveMenu'] = 'kua';
		$r['breadcrumb'] = 'KUA';
		$r['judul'] = 'Buat Permohonan';
		$r['subJudul'] = 'Formulir Permohonan KUA';
		$r['content'] = 'kua/v_create';
		$r['style'] = 'template/assets/css/permohonan-css';
		$r['script'] = 'template/assets/js/permohonan-js';
		$r['dataLogin'] = Modules::run('template/getUserLogin');
		echo Modules::run('template/templateIsLogin', $r);
	}

	public function create()
	{
		$data = $this->input->post();
		$files = $_FILES;
		if ($this->M_kua->submit($data, $files)) {
			$this->session->set_flashdata('success', 'Berhasil Menambahkan Data!');
			redirect('kua');
		} else {
			$this->session->set_flashdata('danger', 'Gagal Menambahkan Data!');
			redirect('kua/create');
		}
	}

	public function edit_page()
	{
		$r['menu'] = 'template/menu/v_menuIslogin';
		$r['isActiveMenu'] = 'kua';
		$r['breadcrumb'] = 'KUA';
		$r['judul'] = 'Edit Permohonan';
		$r['subJudul'] = 'Edit Formulir Permohonan KUA';
		$r['content'] = 'kua/v_edit';
		$r['style'] = 'template/assets/css/permohonan-css';
		$r['script'] = 'template/assets/js/permohonan-js';
		$id = $this->uri->segment(3);
		$result = $this->db->where('id', $id)->get('t_formulir_kua')->result()[0];
		$r['data'] = $result;
		$r['dataLogin'] = Modules::run('template/getUserLogin');
		echo Modules::run('template/templateIsLogin', $r);
	}

	public function edit()
	{
		$data = $this->input->post();
		$files = $_FILES;
		if ($this->M_kua->edit($data, $files)) {
			$this->session->set_flashdata('success', 'Berhasil Mengedit Data!');
			redirect('kua/detail/' . $data['id']);
		} else {
			$this->session->set_flashdata('danger', 'Gagal Mengedit Data!');
			redirect('kua/edit/' . $data['id']);
		}
	}

	public function detail_page()
	{
		$r['menu'] = 'template/menu/v_menuIslogin';
		$r['isActiveMenu'] = 'kua';
		$r['breadcrumb'] = 'KUA';
		$r['judul'] = 'Detail Permohonan';
		$r['subJudul'] = 'Detail Formulir Permohonan KUA';
		$r['content'] = 'kua/v_detail';
		$r['style'] = 'template/assets/css/permohonan-css';
		$r['script'] = 'template/assets/js/permohonan-js';
		$id = $this->uri->segment(3);
		$r['data'] = $this->db->where('id', $id)->get('t_formulir_kua')->result()[0];
		$r['revisi'] = $this->db->where('form_kua_id', $id)->get('t_revisi_formulir_kua')->last_row();
		$r['dataLogin'] = Modules::run('template/getUserLogin');
		echo Modules::run('template/templateIsLogin', $r);
	}

	public function validasi_page()
	{
		$r['menu'] = 'template/menu/v_menuIslogin';
		$r['isActiveMenu'] = 'kua';
		$r['breadcrumb'] = 'KUA';
		$r['judul'] = 'Validasi Permohonan';
		$r['subJudul'] = 'Validasi Formulir Permohonan KUA';
		$r['content'] = 'kua/v_detail';
		$r['style'] = 'template/assets/css/permohonan-css';
		$r['script'] = 'template/assets/js/permohonan-js';
		$id = $this->uri->segment(3);
		$result = $this->db->where('id', $id)->get('t_formulir_kua')->result()[0];
		$r['data'] = $result;
		$r['revisi'] = $this->db->where('form_kua_id', $id)->get('t_revisi_formulir_kua')->last_row();
		$r['validasi'] = true;
		$r['dataLogin'] = Modules::run('template/getUserLogin');
		echo Modules::run('template/templateIsLogin', $r);
	}

	public function validation()
	{
		if ($this->getUserLogin()['role'] != 'operator_capil') {
			$this->session->set_flashdata('danger', 'Gagal!');
			redirect('kua');
		}
		$id = $this->uri->segment(3);
		if ($this->M_kua->validation($id)) {
			$this->session->set_flashdata('success', 'Validasi data berhasil!');
			redirect('kua/detail/' . $id);
		} else {
			$this->session->set_flashdata('danger', 'Validasi data gagal!');
			redirect('kua/validasi/' . $id);
		}
	}

	public function revisi()
	{
		if ($this->getUserLogin()['role'] != 'operator_capil') {
			$this->session->set_flashdata('danger', 'Gagal!');
			redirect('kua');
		}
		$id = $this->uri->segment(3);
		$data = $this->input->post();
		if ($this->M_kua->revisi($id, $data)) {
			$this->session->set_flashdata('success', 'Revisi data berhasil!');
			redirect('kua/detail/' . $id);
		} else {
			$this->session->set_flashdata('danger', 'Revisi data gagal!');
			redirect('kua/validasi/' . $id);
		}
	}

	public function realisasi()
	{
		if ($this->getUserLogin()['role'] != 'operator_kua') {
			$this->session->set_flashdata('danger', 'Gagal!');
			redirect('kua');
		}
		$id = $this->uri->segment(3);
		if ($this->M_kua->realisasi($id)) {
			$this->session->set_flashdata('success', 'Realisasi data berhasil!');
			redirect('kua/detail/' . $id);
		} else {
			$this->session->set_flashdata('danger', 'Realisasi data gagal!');
			redirect('kua/realisasi/' . $id);
		}
	}


	public function delete()
	{
		if($this->getUserLogin()['role'] != 'operator_kua') {
			$this->session->set_flashdata('danger', 'Gagal!');
			redirect('kua');	
		}
		$id = $this->uri->segment(3);
		if($this->M_kua->deleteKua($id)) {
			$this->session->set_flashdata('success', 'Berhasil Menghapus Data!');
			redirect('kua');
		} else {
			$this->session->set_flashdata('danger', 'Gagal Menghapus Data!');
			redirect('kua');
		}
	}
}

}

