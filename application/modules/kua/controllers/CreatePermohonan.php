<?php

class CreatePermohonan extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("auth"));
		}

		// $this->load->models('RS_model', 'rsm');
	}
	public function index()
	{
		$r['menu'] = 'template/menu/v_menuIslogin';
		$r['isActiveMenu'] = 'createpermohonan';
		$r['breadcrumb'] = 'KUA';
		$r['judul'] = 'Buat Permohonan';
		$r['subJudul'] = 'Formulir Permohonan KUA';
		$r['content'] = 'kua/v_createpermohonan';
		$r['style'] = 'template/assets/css/permohonan-css';
		$r['script'] = 'template/assets/js/permohonan-js';

		// $this->load->view($r['content'], $r);
		$r['dataLogin'] = Modules::run('template/getUserLogin');
		echo Modules::run('template/templateIsLogin', $r);
	}
}