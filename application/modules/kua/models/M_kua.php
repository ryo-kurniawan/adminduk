<?php

class M_kua extends MY_Model
{
	private $_table = "t_formulir_kua";
	private $_tableRevisi = "t_revisi_formulir_kua";

	public $_rulesKua = [
		[
			'field' => 'username',
			'label' => 'Username or Email',
			'rules' => 'required'
		],
		[
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|max_length[255]'
		]
	];

	public function submit($data, $files) {
		if(isset($data['create'])) {
			$data['status'] = 'proses';
			unset($data['create']);
		}
		if(isset($data['save'])) {
			$data['status'] = 'belum lengkap';
			unset($data['save']);
		}
		$config['upload_path'] = FCPATH.'uploads/kua';
		$config['allowed_types'] = 'pdf|jpg|png|jpeg';
		$config['max_size'] = 2148;
		$config['encrypt_name'] = true;

		$this->load->library('upload');
		$this->upload->initialize($config);

		foreach ($files as $key => $val) {
			if (!$this->upload->do_upload($key)) {
				$error = $this->upload->display_errors();
			} else {
				$fileData = $this->upload->data();
				$data[$key] = $fileData['file_name'];
			}
		}

		$this->db->insert($this->_table, $data);
		$affected = $this->db->affected_rows();

		if ($affected > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function edit($data, $files) {
		if(isset($data['create'])) {
			$data['status'] = 'proses';
			unset($data['create']);
		}
		if(isset($data['save'])) {
			$data['status'] = 'belum lengkap';
			unset($data['save']);
		}
		$config['upload_path'] = FCPATH.'uploads/kua';
		$config['allowed_types'] = 'pdf|jpg|png|jpeg';
		$config['max_size'] = 2148;
		$config['encrypt_name'] = true;

		$this->load->library('upload');
		$this->upload->initialize($config);

		foreach ($files as $key => $val) {
			if (!$this->upload->do_upload($key)) {
				$error = $this->upload->display_errors();
			} else {
				$fileData = $this->upload->data();
				$data[$key] = $fileData['file_name'];
			}
		}

		$this->db->where('id', $data['id'])->update($this->_table, $data);
		$affected = $this->db->affected_rows();

		if ($affected > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function validation($id) {
		$this->db->where('id', $id)->update($this->_table, [ 'status' => 'tervalidasi' ]);
		$affected = $this->db->affected_rows();
		if ($affected > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function revisi($id, $data) {
		$this->db->insert($this->_tableRevisi, [
			'form_kua_id' => $id,
			'message' => $data['pesan_revisi']
		]);
		$affected[0] = $this->db->affected_rows();
		$this->db->where('id', $id)->update($this->_table, [ 'status' => 'revisi' ]);
		$affected[1] = $this->db->affected_rows();
		if ($affected[0] > 0 && $affected[1] > 0) {
			return true;
		} else {
			return false;
		}
	}
}