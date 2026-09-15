<?php

class Model_data extends CI_Model
{
    public function jumlah_pelanggan()
    {
        $this->db->select_sum('id');
        $this->db->from('tb_invoice');
        return $this->db->get()->row()->id;
    }

    public function jumlah_stok_barang()
    {
        $this->db->select_sum('stok');
        $this->db->from('tb_barang');
        return $this->db->get()->row()->stok;
    }

    public function jumlah_pesanan()
    {
        $this->db->select_sum('jumlah');
        $this->db->from('tb_pesanan');
        return $this->db->get()->row()->jumlah;
    }

    public function jumlah_Pendapatan()
    {
        $this->db->select_sum('harga');
        $this->db->from('tb_pesanan');
        return $this->db->get()->row()->harga;
    }
}
