<?php

class M_auth extends MY_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateUser($data, $where)
    {
        $this->db->where($where);
        return $this->db->update('t_user', $data);
    }
}
