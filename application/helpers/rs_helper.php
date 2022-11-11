<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('displayErrorFile')) {
    function displayErrorFile($errors)
    {

        switch ($errors) {
            case '<p>The upload destination folder does not appear to be writable.</p>':
                $result = 'Lokasi file tidak diizinkan untuk di akses!';
                break;

            case '<p>You did not select a file to upload.</p>':
                $result = 'Belum memilih file!';
                break;

            case '<p>The file you are attempting to upload is larger than the permitted size.</p>':
                $result = 'Melebihi batas ukuran maksimal!';
                break;

            case '<p>The filetype you are attempting to upload is not allowed.</p>':
                $result = 'Tipe file tidak diizinkan!';
                break;

            default:
                # code...
                break;
        }

        return $result;
    }
}


if (!function_exists('validasiText')) {
    function validasiText($name, $label, $type)
    {

        $CI = & get_instance();

        $mess_text = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($type == 'text') {

                $CI->form_validation->set_rules($name, $label, 'trim|required', ['required' => 'Tidak boleh kosong!']);

            }

            if ($type == 'nik_kk') {

                $CI->form_validation->set_rules(
                    $name,
                    $label,
                    'trim|required|numeric|min_length[16]|max_length[16]',
                    [
                        'required' => 'Tidak boleh kosong!',
                        'numeric' => 'Harus angka!',
                        'min_length' => 'Harus 16 karakter!',
                        'max_length' =>
                        'Harus 16 karakter!'
                    ]
                );
            }

            if ($CI->form_validation->run() == false) {

                $mess_text = str_replace(['<p>', '</p>'], ['<label class="text-danger">', '</label>'], form_error($name));

            }
        } else {

            $mess_text = '<label class="text-danger">Terjadi kesalahan!</label>';

        }

        return $mess_text;

    }
}


if (!function_exists('validasiFile')) {
    function validasiFile($file)
    {

        $mess_file = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($_FILES) {

                $file_type = array('pdf', 'jpg', 'png'); // valid extensions

                $file_name = $_FILES[$file]['name'];
                $file_size = $_FILES[$file]['size'];
                $file_tmp = $_FILES[$file]['tmp_name'];

                $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

                if (!$file_tmp) {

                    $mess_file = '<label class="text-danger">Belum memilih file</label>';

                } else {

                    if (!in_array($ext, $file_type)) {

                        $mess_file = '<label class="text-danger">Tipe file tidak diizinkan!</label>';

                    } else {

                        if ($file_size > 2097152) {

                            $mess_file = '<label class="text-danger">Ukuran file melebihi batas maksimal!</label>';

                        }
                    }
                }

            } else {

                $mess_file = '<label class="text-danger">Terjadi kesalahan!</label>';
            }

        } else {
            $mess_file = '<label class="text-danger">Terjadi kesalahan!</label>';
        }


        return $mess_file;

    }
}


if (!function_exists('uploadFile')) {
    function uploadFile($name)
    {

        $CI = & get_instance();

        $result = '';

        $path = './assets/file/laporan-rs/puskes-kwandang/img/';

        if ($_FILES[$name]['type'] == 'pdf') {
            $path = './assets/file/laporan-rs/puskes-kwandang/pdf/';
        }


        $file_name = $_FILES[$name]['name'];
        $file_temp = $_FILES[$name]['tmp_name'];

        $fileinfo = @getimagesize($file_temp);
        // get uploaded file's extension
        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        // can upload same image using rand function
        $final_file = rand(1000, 1000000) . date('-d-m-Y.') . $ext;

        $full_path = $path . strtolower($final_file);
        if (move_uploaded_file($file_temp, $full_path)) {
            $result = $full_path;
        }

        return $result;
    }
}