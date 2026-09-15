<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "third_party/dompdf/autoload.php";

use Dompdf\Dompdf;

class Dashboard_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_data');
        $this->load->model('Model_invoice');
        $this->load->model('Model_pesanan');

        if ($this->session->userdata('role_id') != '1') {
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
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $data['jumlah_pelanggan']   = $this->Model_data->jumlah_pelanggan();
        $data['jumlah_stok_barang'] = $this->Model_data->jumlah_stok_barang();
        $data['jumlah_pesanan']    = $this->Model_data->jumlah_pesanan();
        $data['jumlah_pendapatan']    = $this->Model_data->jumlah_pendapatan();
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
    public function exportToPdf_detail($id_invoice)
    {
        $data['pesanan'] = $this->Model_pesanan->lihat_semua_pesanan();

        // Load view untuk detail invoice 
        $html = $this->load->view('admin/detail_invoice', $data, true); // Render view sebagai string HTML   

        $paper_size  = 'A4'; // ukuran kertas 
        $orientation = 'potrait'; //tipe format kertas potrait atau landscape 
        $html = $this->output->get_output();

        $pdf = new Dompdf();

        $pdf->setPaper($paper_size, $orientation);
        //Convert to PDF
        $pdf->loadHtml($html);
        $pdf->render();
        // nama file pdf yang di hasilkan 
        $pdf->stream("detail_invoice_" . $id_invoice . ".pdf", array("Attachment" => false));
    }
}
