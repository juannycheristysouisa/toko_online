<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "third_party/dompdf/autoload.php";

use Dompdf\Dompdf;

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_kategori');

        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['sofa'] = $this->model_kategori->data_sofa()->result();
        $data['lemari'] = $this->model_kategori->data_lemari()->result();
        $data['tempat_tidur'] = $this->model_kategori->data_tempat_tidur()->result();
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $data['perlengkapan_dapur'] = $this->model_kategori->data_perlengkapan_dapur()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tampilan_keseluruhan', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'       => $barang->id_brg,
            'qty'      => 1,
            'price'    => $barang->harga,
            'name'     => $barang->nama_brg

        );

        $this->cart->insert($data);
        redirect('welcome');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('proses_pesanan');
        $this->load->view('templates/footer');
    }
    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }
    public function exportToPdf()
    {
        $id = $this->session->userdata('id_invoice');
        $data['tb_user'] = $this->session->userdata('nama');
        $data['judul'] = "Cetak Bukti Pesanan";
        $data['useraktif'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id_invoice')])->result();
        $data['items'] = $this->db->query("SELECT * FROM tb_pesanan JOIN tb_invoice ON tb_pesanan.id_invoice = tb_invoice.id JOIN tb_barang ON tb_pesanan.id_brg = tb_barang.id_brg WHERE tb_invoice.id = ''")->result_array();

        $this->load->view('pemesanan/bukti-pdf', $data);

        $paper_size  = 'A5'; // ukuran kertas 
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape 
        $html = $this->output->get_output();

        $pdf = new Dompdf();

        $pdf->setPaper($paper_size, $orientation);
        //Convert to PDF
        $pdf->loadHtml($html);
        $pdf->render();
        // nama file pdf yang di hasilkan 
        $pdf->stream("Bukti-Pemesanan$id.pdf", [
            'Attachment' => 0
        ]);
        $this->cart->destroy();
    }
    public function exportToPdf_detail()
    {
        $id = $this->session->userdata('id_invoice');
        $data['tb_user'] = $this->session->userdata('nama');
        $data['judul'] = "Cetak Bukti Pesanan";
        $data['useraktif'] = $this->ModelUser->cekData(['id' => $this->session->userdata('id_invoice')])->result();
        $data['items'] = $this->db->query("SELECT * FROM tb_pesanan JOIN tb_invoice ON tb_pesanan.id_invoice = tb_invoice.id JOIN tb_barang ON tb_pesanan.id_brg = tb_barang.id_brg WHERE tb_invoice.id = ''")->result_array();

        $this->load->view('pemesanan/bukti-pdf-detail', $data);

        $paper_size  = 'A5'; // ukuran kertas 
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape 
        $html = $this->output->get_output();

        $pdf = new Dompdf();

        $pdf->setPaper($paper_size, $orientation);
        //Convert to PDF
        $pdf->loadHtml($html);
        $pdf->render();
        // nama file pdf yang di hasilkan 
        $pdf->stream("Bukti-Pemesanan$id.pdf", [
            'Attachment' => 0
        ]);
        $this->cart->destroy();
    }
}
