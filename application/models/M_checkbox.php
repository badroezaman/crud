<?php

class M_checkbox extends CI_Model
{
    public function insertinfo($data)
    {
        $this->db->insert('info',$data);
    }

    public function tampil_info()
    {
        return $this->db->get('info')->result();
    }
}