<?php

class Auth extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth', 'ma');
    }

    function index()
    {
        $r['content'] = 'auth/v_login';
        $r['myScript'] = base_url('myScript/auth/login.js');
        echo Modules::run('template/templateAuth', $r);
    }

    public function loginAksi()
    {
        $messUsername = '';
        $messPassword = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            if ($this->input->post('email') == "") {
                $messUsername = '<label class="text-danger">Email/Username tidak boleh kosong 1234!</label>';
            }

            if ($this->input->post('password') == "") {
                $messPassword = '<label class="text-danger">Password tidak boleh kosong!</label>';
            }
            $username = $this->input->post('email', TRUE);
            $password = $this->input->post('password', TRUE);

            // $passHash = password_hash('12345678', PASSWORD_DEFAULT);

            $cek = $this->ma->cek_login("t_user", 'email="' . $username . '" OR username="' . $username . '"');



            if ($cek->num_rows() > 0) {

                $user = $cek->row_array();
                if (password_verify($password, $user['password'])) {
                    $data_response = [
                        'proccess' => 'success',
                        'message' => 'Berhasil login',
                        'err_email' => $messUsername,
                        'err_password' => $messPassword
                    ];
                    $data_session = array(
                        'nik' => $user['nik'],
                        'status' => "login"
                    );

                    $this->session->set_userdata($data_session);
                } else {
                    $messPassword = '<label class="text-danger">Password salah!</label>';
                    $data_response = [
                        'proccess' => 'error',
                        'message' => 'Login gagal',
                        'err_email' => $messUsername,
                        'err_password' => $messPassword
                    ];
                }
            } else {
                $messUsername = '<label class="text-danger">Email/Username tidak terdaftar!</label>';
                $data_response = [
                    'proccess' => 'error',
                    'message' => 'Login gagal',
                    'err_email' => $messUsername,
                    'err_password' => $messPassword
                ];
            }
        }

        echo json_encode($data_response);
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->ma->cek_login("t_user", $where);
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

    public function lupaPassword()
    {
        $r['content'] = 'auth/v_sendLinkEmail';
        $r['myScript'] = base_url('myScript/auth/sendLinkReset.js');
        echo Modules::run('template/templateAuth', $r);
    }

    public function aksi_lupaPassword()
    {
        $data_response = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email', ['required' => '%s tidak boleh kosong!', 'valid_email' => '%s tidak valid!']);

            if ($this->form_validation->run() == TRUE) {
                $email = $this->input->post('email');
                $cek = $this->ma->cek_login('t_user', ['email' => $email]);

                if ($cek->num_rows() > 0) {
                    $row = $cek->row_array();
                    $string = time() . $row['nik'] . $row['email'];
                    $hash_string = hash('sha256', $string);
                    $current_date = date('Y-m-d H:i');
                    $hash_expiry = date('Y-m-d H:i', strtotime($current_date . ' 1 days'));

                    $data = [
                        'hash_key' => $hash_string,
                        'hash_expiry' => $hash_expiry
                    ];

                    $this->ma->updateUser($data, ['email' => $email]);
                    $resetLink = base_url('auth/resetPassword?hash=' . $hash_string);
                    $message = '<p style"margin-bottom: 0">Klik link berikut untuk reset password: </p><a href="' . $resetLink . '" style="background-color: #E0144C; border: 1px solid #E0144C; font-size: 0.70rem; color: #fff; margin-top: 0; padding: 0.34rem 1rem; border-radius: 8px; text-decoration: none;">DAPATKAN LINK RESET!</a>';
                    $subject = 'Reset Password Adminduk Dukcapil Gorontalo Utara';

                    if ($this->sendMail($email, $subject, $message) == true) {
                        $data_response = [
                            'proccess' => 'success',
                            'message' => 'Link reset telah dikirim di email tersebut, silahkan cek email!',
                            'err_email' => '',
                            'succ_email' => '<fieldset><label"><b class="text-success">Pesan: </b>Link untuk reset password telah dikirm di email tersebut. Cek Email, jika tidak menerima pesan selama <span class="text-danger">5 Menit</span> kirim ulang dengan menekan tombol di bawah ini.</label></fieldset>',
                        ];
                    } else {
                        $data_response = [
                            'proccess' => 'error',
                            'message' => 'Terjadi kesalahan',
                            'err_email' => '',
                            'succ_email' => '',
                        ];
                    }
                } else {
                    $data_response = [
                        'proccess' => 'error',
                        'message' => 'Kesalahan penulisan email!',
                        'err_email' => '<label class="text-danger">Email tidak cocok!</label>',
                        'succ_email' => '',
                    ];
                }
            } else {
                $data_response = [
                    'proccess' => 'error',
                    'message' => 'Terjadi kesalahan',
                    'err_email' => str_replace(['<p>', '</p>'], ['<label class="text-danger">', '</label>'], form_error('email')),
                    'succ_email' => '',
                ];
            }
        } else {
            $data_response = [
                'proccess' => 'error',
                'message' => 'Terjadi kesalahan',
                'err_email' => '',
                'succ_email' => '',
            ];
        }

        echo json_encode($data_response);
    }

    public function sendMail($email, $subject, $message)
    {
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_port'] = '587';
        $config['smtp_user'] = 'dukcapil.gorutkab@gmail.com';
        $config['_smtp_auth'] = TRUE;
        $config['smtp_pass'] = 'ducueacctekqubck';
        $config['smtp_crypto'] = 'tls';
        $config['protocol'] = 'smtp';
        $config['mailtype'] = 'html';
        $config['send_multipart'] = FALSE;
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;

        // $this->email->initialize($mail_config);

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('noreplay');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }

    public function proses_resetPassoword()
    {
        if ($this->input->get('hash')) {
            $hash = $this->input->get('hash');
            $r['hash'] = $hash;
            $getHashDetails = $this->ma->cek_login('t_user', ['hash_key' => $hash]);
            if ($getHashDetails) {
                $hashDetails = $getHashDetails->row_array();
                $hash_expiry = $hashDetails['hash_expiry'];
                $curenDate = date('H-m-d H:i');
                if ($curenDate < $hash_expiry) {
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $this->form_validation->set_rules('password_baru', 'Password Baru', 'required', ['required' => '%s tidak boleh kosong!']);
                        $this->form_validation->set_rules('ulangi_password', 'Ulangi Password', 'required|matches[password_baru]', ['required' => '%s tidak boleh kosong!', 'matches' => '%s tidak cocok!']);

                        if ($this->form_validation->run() == TRUE) {
                            $newPass = $this->input->post('');
                            $data = [
                                'password' => sha1($newPass),
                                'hash_key' => null,
                                'hash_expiry' => null
                            ];

                            if ($this->ma->updateUser($data, ['hash_key' => $hash])) {
                                echo 'Password berhasil diubah!';
                            } else {
                                echo 'Gagal ubah password!';
                            }
                        } else {
                            $r['val_password_baru'] = set_value('password_baru');
                            $r['val_ulangi_password'] = set_value('ulangi_password');
                            $r['err_password_baru'] = str_replace(['<p>', '</p>'], ['<label class="text-danger">', '</label>'], form_error('password_baru'));
                            $r['err_ulangi_password'] = str_replace(['<p>', '</p>'], ['<label class="text-danger">', '</label>'], form_error('ulangi_password'));

                            $r['content'] = 'auth/v_resetPassword';
                            echo Modules::run('template/templateAuth', $r);
                        }
                    } else {

                        $r['val_password_baru'] = '';
                        $r['val_ulangi_password'] = '';
                        $r['err_password_baru'] = '';
                        $r['err_ulangi_password'] = '';

                        $r['content'] = 'auth/v_resetPassword';
                        echo Modules::run('template/templateAuth', $r);
                    }
                } else {
                    redirect('auth/lupaPassword');
                }
            }
        } else {
            echo 'gagal';
        }
    }

    public function resetPassword()
    {
        $hash = $this->input->get('hash');
        $r['hash'] = $hash;
        $r['val_password_baru'] = '';
        $r['val_ulangi_password'] = '';
        $r['err_password_baru'] = '';
        $r['err_ulangi_password'] = '';

        $r['content'] = 'auth/v_resetPassword';
        $r['myScript'] = base_url('myScript/auth/resetPassword.js');
        echo Modules::run('template/templateAuth', $r);
    }

    public function prosesResetPassword()
    {


        // Cek parameter hash dengan methode POST
        if ($this->input->post('hash')) {


            // Deklarasi variabel $hash
            $r['hash'] = $this->input->post('hash');


            // Deklarasi variabel yang memuat tentang query cek t_user dengan where hash_key
            $getHashDetails = $this->ma->cek_login('t_user', ['hash_key' => $r['hash']]);


            // Cek apakah $getHashDetails lebih dari 0 atau tidak kosong
            if ($getHashDetails->num_rows() > 0) {


                // Code jika $getHashDetails lebih dari 0 atau tidak kosong


                // Deklarasi variabel $hashDetails yang memuat $getHashDetails dalam bentuk row_array
                $hashDetails = $getHashDetails->row_array();


                // Deklarasi variabel $hash_expiry yang memuat data hash_expiry dari DB
                $hash_expiry = $hashDetails['hash_expiry'];


                // Deklarasi variabel $curentDate yang memuat data tanggal sekarang
                $curentDate = date('H-m-d H:i');


                // Cek apakah $curentDate lebih kecil dari $hash_expiry (cek apakah link sudah kadaluarsa)
                if ($curentDate < $hash_expiry) {


                    // Cek Request Method dengan parameter POST
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                        // Membuat validasi inputan

                        // Validasi password baru
                        // $this->form_validation->set_rules('password_baru', 'Password Baru', 'required', ['required' => '%s tidak boleh kosong!']);

                        $password['baru'] = '';
                        $password['repeat'] = '';


                        if ($_POST['newPass'] == "") {
                            $password['baru'] = '<label class="text-danger">Password tidak boleh kosong!</label>';
                        }
                        else
                        {
                            if (strlen($_POST['newPass']) < 8) {
                                $password['baru'] = '<label class="text-danger">Password maksimal 8 karakter!</label>';
                            }
                        }


                        if ($_POST['repeatPass'] != $_POST['newPass'] || $_POST['newPass'] == "") {
                            $password['repeat'] = '<label class="text-danger">Password tidak cocok!</label>';
                        }

                        // Cek validasi inputan
                        if ($password['baru'] == '' && $password['repeat'] == '') {

                            // Validasi berhasil
                            $newPass = $this->input->post('newPass', TRUE);
                            $data = [
                                'password' => password_hash($newPass, PASSWORD_DEFAULT),
                                'hash_key' => null,
                                'hash_expiry' => null
                            ];

                            if ($this->ma->updateUser($data, ['hash_key' => $r['hash']])) {

                                // Data pesan error: "Terjadi kesalahan" yang dikembalikan 
                                $data_response = [
                                    'proccess' => 'success',
                                    'message' => 'Password telah diubah',
                                    'err_newPass' => '',
                                    'err_repeatPass' => '',
                                ];
                            } else {

                                // Data pesan error: "Terjadi kesalahan" yang dikembalikan 
                                $data_response = [
                                    'proccess' => 'error',
                                    'message' => 'Terjadi kesalahan 1',
                                    'err_newPass' => '',
                                    'err_repeatPass' => '',
                                ];
                            }
                        }
                        // Jika validasi gagal 
                        else {

                            // Data pesan error: "Terjadi kesalahan" yang dikembalikan 
                            $data_response = [
                                'proccess' => 'error',
                                'message' => 'Periksa inputan!',
                                'err_newPass' => $password['baru'],
                                'err_repeatPass' => $password['repeat'],
                            ];
                        }
                    }
                    // Jika Request Method != POST
                    else {


                        // Data pesan error: "Terjadi kesalahan" yang dikembalikan 
                        $data_response = [
                            'proccess' => 'error',
                            'message' => 'Terjadi kesalahan 2',
                            'err_newPass' => '',
                            'err_repeatPass' => '',
                        ];
                    }
                }
                // Jika link kadaluarsa 
                else {

                    // Data pesan error: "Link kadaluarsa" yang dikembalikan 
                    $data_response = [
                        'proccess' => 'error',
                        'message' => 'Link telah kadaluarsa!',
                        'err_newPass' => '',
                        'err_repeatPass' => '',
                    ];
                }
            }
            // Jika $getHashDetails adalah 0
            else {


                // Data pesan error: "Terjadi kesalahan" yang dikembalikan 
                $data_response = [
                    'proccess' => 'error',
                    'message' => 'Link telah kadaluarsa!',
                    'err_newPass' => '',
                    'err_repeatPass' => '',
                ];
            }
        }
        // Jiks parameter tidak hash dengan methode POST
        else {

            // Data pesan error: "Terjadi kesalahan" yang dikembalikan 
            $data_response = [
                'proccess' => 'error',
                'message' => 'Terjadi kesalahan',
                'err_newPass' => '',
                'err_repeatPass' => '',
            ];
        }

        // Output dalam bentuk data json
        echo json_encode($data_response);
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }

    function test()
    {
        $string = "Aku12345";
        $karakter = strlen($string);

        if ($karakter < 8) {
            echo 'Maksimal 8 karakter';
        }
    }
}
