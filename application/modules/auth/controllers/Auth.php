<?php

class Auth extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    function index()
    {
        $r['content'] = 'auth/v_login';
        echo Modules::run('template/templateAuth', $r);
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->m_login->cek_login("t_user", $where);
        if ($cek->num_rows() > 0) {

            $row = $cek->row_array();
            $data_session = array(
                'nik' => $row['nik'],
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("home"));
        } else {
            echo "Username Atau password salah !";
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }
}
