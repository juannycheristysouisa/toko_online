<?php

class Model_laporan extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_barang');
        return $this->db->get('tb_invoice');
        return $this->db->get('tb_pesanan');
    }
}
