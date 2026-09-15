<?php

class Model_pesanan extends CI_Model
{
    public function tambah_pesanan($data)
    {
        $this->db->insert('tb_pesanan', $data);
        return $this->db->insert_id();
    }

    public function lihat_semua_pesanan()
    {
        $this->db->select('*');
        $this->db->from('tb_pesanan');
        $query = $this->db->get();
        return $query->result();
    }

    public function lihat_pesanan_by_id($id_pesanan)
    {
        $this->db->select('*');
        $this->db->from('tb_pesanan');
        $this->db->where('id', $id_pesanan);
        $query = $this->db->get();
        return $query->row();
    }

    public function hapus_pesanan($id_pesanan)
    {
        $this->db->where('id', $id_pesanan);
        $this->db->delete('tb_pesanan');
    }

    // ... fungsi lainnya ... (jika diperlukan)
}