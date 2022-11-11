<?php

class Permohonan extends MX_Controller
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
		$r['isActiveMenu'] = 'permohonan';
		$r['breadcrumb'] = 'Home';
		$r['judul'] = 'Permohonan';
		$r['subJudul'] = 'Formulir Permohonan Akta Kelahiran';
		$r['content'] = 'rs/v_laporan_tes';
		$r['style'] = 'template/assets/css/permohonan-css';
		$r['script'] = 'template/assets/js/permohonan-js';


		// $this->load->view($r['content'], $r);
		$r['dataLogin'] = Modules::run('template/getUserLogin');
		echo Modules::run('template/templateIsLogin', $r);
	}

	public function prosesKirimLaporan()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			// Validate Data orang tua
			if ($this->input->post('validFor') == 'Data-01' || $this->input->post('validFor') == 'Data-02') {

				// Data Ayah
				if ($this->input->post('validFor') == 'Data-01') {
					$nameNama = 'nama_ayah';
					$labeNama = 'Nama Ayah';
					$nameNik = 'nik_ayah';
					$labelNik = 'NIK Ayah';
				}

				// Data Ibu
				if ($this->input->post('validFor') == 'Data-02') {
					$nameNama = 'nama_ibu';
					$labeNama = 'Nama Ibu';
					$nameNik = 'nik_ibu';
					$labelNik = 'NIK Ibu';
				}

				if (validasiText($nameNama, $labeNama, 'text') == '' && validasiText($nameNik, $labelNik, 'nik_kk') == '') {

					$data = [
						'validFor' => $this->input->post('validFor'),
						'proccess' => 'success',
						'message' => 'Lanjut ke proses selanjutnya!',
						'mess_nama' => validasiText($nameNama, $labeNama, 'text'),
						'mess_nik' => validasiText($nameNik, $labelNik, 'nik_kk')
					];

				} else {

					$data = [
						'validFor' => $this->input->post('validFor'),
						'proccess' => 'error',
						'message' => 'Periksa inputan!',
						'mess_nama' => validasiText($nameNama, $labeNama, 'text'),
						'mess_nik' => validasiText($nameNik, $labelNik, 'nik_kk')
					];

				}
			} else if ($this->input->post('validFor') == 'Data-03') {

				if (validasiText('nama_anak', 'Nama Anak', 'text') == '' && validasiText('tempat_lahir_anak', 'Tempat Lahir', 'text') == '' && validasiText('tgl_lahir_anak', 'Tanggal Lahir', 'text') == '') {

					$data = [
						'validFor' => $this->input->post('validFor'),
						'proccess' => 'success',
						'message' => 'Lanjut ke proses selanjutnya!',
						'mess_nama' => validasiText('nama_anak', 'Nama Anak', 'text'),
						'mess_tempat_lahir' => validasiText('tempat_lahir_anak', 'Tempat Lahir', 'text'),
						'mess_tgl_lahir' => validasiText('tgl_lahir_anak', 'Tanggal Lahir', 'text')
					];

				} else {

					$data = [
						'validFor' => $this->input->post('validFor'),
						'proccess' => 'error',
						'message' => 'Periksa inputan!',
						'mess_nama' => validasiText('nama_anak', 'Nama Anak', 'text'),
						'mess_tempat_lahir' => validasiText('tempat_lahir_anak', 'Tempat Lahir', 'text'),
						'mess_tgl_lahir' => validasiText('tgl_lahir_anak', 'Tanggal Lahir', 'text')
					];

				}

			} else if ($this->input->post('validFor') == 'Data-04') {

				if (validasiText('nama_ayah', 'Nama Ayah', 'text') == '' && validasiText('nik_ayah', 'NIK Ayah', 'nik_kk') == '' && validasiText('nama_ibu', 'Nama Ibu', 'text') == '' && validasiText('nik_ibu', 'NIK Ibu', 'nik_kk') == '' && validasiText('nama_anak', 'Nama Anak', 'text') == '' && validasiText('tempat_lahir_anak', 'Tempat Lahir', 'text') ==
					'' && validasiText('tgl_lahir_anak', 'Tanggal Lahir', 'text') == '') {

					if (validasiText('no_kk', 'No. Kartu Keluarga', 'nik_kk') == '' && validasiFile('file_kk') == '' && validasiFile('file_ktp_ayah') == '' && validasiFile('file_ktp_ibu') == '') {

						$data_insert = [
							'id_laporan' => md5(rand(1000, 1000000)),
							'nama_ayah' => $this->input->post('nama_ayah'),
							'nik_ayah' => $this->input->post('nik_ayah'),
							'nama_ibu' => $this->input->post('nama_ibu'),
							'nik_ibu' => $this->input->post('nik_ibu'),
							'nama_anak' => $this->input->post('nama_anak'),
							'tempat_lahir_anak' => $this->input->post('tempat_lahir_anak'),
							'tgl_lahir_anak' => $this->input->post('tgl_lahir_anak'),
							'no_kk' => $this->input->post('no_kk'),
							'file_kk' => uploadFile('file_kk'),
							'file_ktp_ayah' => uploadFile('file_ktp_ayah'),
							'file_ktp_ibu' => uploadFile('file_ktp_ibu'),
						];

						// if ($this->rsm->createLaporan($data_insert) == true) {


						// }
						$data = [
							'validFor' => $this->input->post('validFor'),
							'proccess' => 'success',
							'message' => 'Data laporan berhasil terkirim!!',
							'mess_nama_ayah' => validasiText('nama_ayah', 'Nama Ayah', 'text'),
							'mess_nik_ayah' => validasiText('nik_ayah', 'NIK Ayah', 'nik_kk'),
							'mess_nama_ibu' => validasiText('nama_ibu', 'Nama Ibu', 'text'),
							'mess_nik_ibu' => validasiText('nik_ibu', 'NIK Ibu', 'nik_kk'),
							'mess_nama_anak' => validasiText('nama_anak', 'Nama Anak', 'text'),
							'mess_tempat_lahir_anak' => validasiText('tempat_lahir_anak', 'Tempat Lahir', 'text'),
							'mess_tgl_lahir_anak' => validasiText('tgl_lahir_anak', 'Tanggal Lahir', 'text'),
						];

					} else {

						$data = [
							'validFor' => $this->input->post('validFor'),
							'proccess' => 'error',
							'message' => 'Periksa inputan!',
							'mess_nama_ayah' => validasiText('nama_ayah', 'Nama Ayah', 'text'),
							'mess_nik_ayah' => validasiText('nik_ayah', 'NIK Ayah', 'nik_kk'),
							'mess_nama_ibu' => validasiText('nama_ibu', 'Nama Ibu', 'text'),
							'mess_nik_ibu' => validasiText('nik_ibu', 'NIK Ibu', 'nik_kk'),
							'mess_nama_anak' => validasiText('nama_anak', 'Nama Anak', 'text'),
							'mess_tempat_lahir_anak' => validasiText('tempat_lahir_anak', 'Tempat Lahir', 'text'),
							'mess_tgl_lahir_anak' => validasiText('tgl_lahir_anak', 'Tanggal Lahir', 'text'),
						];

					}

				} else {
					$data = [
						'validFor' => $this->input->post('validFor'),
						'proccess' => 'error',
						'message' => 'Terjadi kesalahan, silahkan mundur langkah dan cek inputan!',
						'mess_nama_ayah' => validasiText('nama_ayah', 'Nama Ayah', 'text'),
						'mess_nik_ayah' => validasiText('nik_ayah', 'NIK Ayah', 'nik_kk'),
						'mess_nama_ibu' => validasiText('nama_ibu', 'Nama Ibu', 'text'),
						'mess_nik_ibu' => validasiText('nik_ibu', 'NIK Ibu', 'nik_kk'),
						'mess_nama_anak' => validasiText('nama_anak', 'Nama Anak', 'text'),
						'mess_tempat_lahir_anak' => validasiText('tempat_lahir_anak', 'Tempat Lahir', 'text'),
						'mess_tgl_lahir_anak' => validasiText('tgl_lahir_anak', 'Tanggal Lahir', 'text'),
					];
				}

			}
		} else {
			$data = [
				'validFor' => '',
				'proccess' => 'error',
				'message' => 'Terjadi kesalahan!',
				'mess_nama' => '<label class="text-danger"></label>',
				'mess_nik' => '<label class="text-danger"></label>'
			];
		}

		echo json_encode($data);
	}


	public function tes()
	{
		if (validasiFile('file_kk') == '') {
			$data = [
				'file_kk' => validasiFile('file_kk'),
				'file_kk_uploaded' => uploadFile('file_kk'),
			];

		} else {
			$data = [
				'file_kk' => validasiFile('file_kk'),
				'file_kk_uploaded' => '',
			];
		}

		echo json_encode($data);
	}
}