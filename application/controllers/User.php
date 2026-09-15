<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Profil Saya';
        $data['tb_user'] = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function anggota()
    {
        $data['judul'] = 'Data Pelanggan';
        $data['tb_user'] = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();
        $this->db->where('id', 1);
        $data['username'] = $this->db->get('tb_user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/pelanggan', $data);
        $this->load->view('templates/footer');
    }
}
