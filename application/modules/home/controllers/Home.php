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


		$r['dataLogin'] = Modules::run('template/getUserLogin');

		echo Modules::run('template/templateIsLogin', $r);
	}
}
