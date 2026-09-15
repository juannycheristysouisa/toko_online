<?php

class Model_barang extends CI_Model
{
    // Method untuk menghitung total barang
    public function total()
    {
        $this->db->select('COUNT(*) as total');
        $query = $this->db->get('barang'); // Misalkan tabel barang
        $result = $query->row();
        return $result->total; // Mengembalikan jumlah total
    }
    public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('id_brg', $id)
            ->limit(1)
            ->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_brg($id_brg)
    {
        $result = $this->db->where('id_brg', $id_brg)->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
