<?php

class Home extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("auth"));
		}
	}
	public function index()
	{
		$r['menu'] = 'template/menu/v_menuIslogin';
		$r['isActiveMenu'] = 'home';
		$r['breadcrumb'] = 'Home';
		$r['judul'] = 'Dashboard';
		$r['content'] = 'home/v_home';
		$r['style'] = 'template/assets/css/dashboard-css';
		$r['script'] = 'template/assets/js/dashboard-js';

		$r['proses'] = $this->db->where('status', 'proses')->get('t_formulir_kua')->num_rows();
		$r['belum_lengkap'] = $this->db->where('status', 'belum lengkap')->get('t_formulir_kua')->num_rows();
		$r['tervalidasi'] = $this->db->where('status', 'tervalidasi')->get('t_formulir_kua')->num_rows();
		$r['revisi'] = $this->db->where('status', 'revisi')->get('t_formulir_kua')->num_rows();
		$r['selesai'] = $this->db->where('status', 'selesai')->get('t_formulir_kua')->num_rows();

		$r['dataLogin'] = Modules::run('template/getUserLogin');

		echo Modules::run('template/templateIsLogin', $r);

		// echo $r['dataLogin']['nik'] . '<br>';
		// echo $this->session->userdata('nik');
	}
}
