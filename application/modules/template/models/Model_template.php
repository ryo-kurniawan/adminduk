<?php

class Model_template extends CI_Model
{

	public function getWhere($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
}
