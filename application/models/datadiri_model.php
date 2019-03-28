<?php

class datadiri_model extends CI_Model
{
    public function cekUser(){
        $result = $this->db->get('tb_datadiri');
        return $result -> row(0);
    }

    public function getTeman(){
        $result = $this->db->get('tb_datateman');
        return $result -> result_array();
    }
}