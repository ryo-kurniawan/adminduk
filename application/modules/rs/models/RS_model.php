<?php

class RS_model extends MY_Model
{
	private $_view_table = "view_agenda";
	private $_table = "t_laporan_rs";

	public function createLaporan($data)
	{
		return false;

		if ($this->db->insert($this->_table, $data)) {
			return true;
		}
	}


}