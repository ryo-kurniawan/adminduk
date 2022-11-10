<?php

class PermohonanKUA extends MX_Controller
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
		$r['isActiveMenu'] = 'permohonan_kua';
		$r['breadcrumb'] = 'Home';
		$r['judul'] = 'Permohonan KUA';
		$r['subJudul'] = 'Formulir Permohonan Akta Perkawinan';
		$r['content'] = 'kua/v_laporankua';
		$r['style'] = 'template/assets/css/permohonan-css';
		$r['script'] = 'template/assets/js/permohonan-js';


		$r['dataLogin'] = Modules::run('template/getUserLogin');
		echo Modules::run('template/templateIsLogin', $r);
	}
}
