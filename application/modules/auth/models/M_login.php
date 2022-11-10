<?php

class M_login extends MY_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
