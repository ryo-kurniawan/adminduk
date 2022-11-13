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
		if($this->M_kua->submit($data, $files)) {
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
		if($this->M_kua->edit($data, $files)) {
			$this->session->set_flashdata('success', 'Berhasil Mengedit Data!');
			redirect('kua/detail/'.$data['id']);
		} else {
			$this->session->set_flashdata('danger', 'Gagal Mengedit Data!');
			redirect('kua/edit/'.$data['id']);
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
		$result = $this->db->where('id', $id)->get('t_formulir_kua')->result()[0];
		$r['data'] = $result;
		$r['dataLogin'] = Modules::run('template/getUserLogin');
		echo Modules::run('template/templateIsLogin', $r);
	}
}