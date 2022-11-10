<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Template
 *
 * @author Andriyanto Pajiri
 */
class Template extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_template', 'mt');
    }

    public function getUserLogin()
    {
        $getUser = $this->mt->getWhere('t_user', ['nik' => $this->session->userdata('nik')]);
        if ($getUser->num_rows() > 0) {
            $row = $getUser->row_array();
            $dataLogin = [
                'nik' => $row['nik'],
                'nama' => $row['nama'],
                'email' => $row['email'],
                'username' => $row['username'],
                'avatar' => $row['avatar'],
                'created_at' => $row['created_at'],
                'last_login' => $row['last_login']
            ];
            return $dataLogin;
        }
    }

    // Membuat fungsi untuk pemanggilan master template admin
    public function templateIsLogin($resource)
    {
        $this->load->view('page/v_isLogin', $resource);
    }

    // Membuat fungsi untuk pemanggilan master template admin
    public function templateAuth($resource)
    {

        $this->load->view('page/v_auth', $resource);
    }
}
