<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "third_party/dompdf/autoload.php";

use Dompdf\Dompdf;

class Laporan_invoice extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

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
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporan_invoice', $data);
        $this->load->view('templates_admin/footer');
    }
    public function cetak_laporan_invoice()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();

        $this->load->view('admin/laporan_print_invoice', $data);
    }
    public function laporan_invoice_pdf()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('admin/laporan_pdf_invoice', $data);

        $paper_size  = 'A5'; // ukuran kertas 
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape 
        $html = $this->output->get_output();

        $pdf = new Dompdf();

        $pdf->setPaper($paper_size, $orientation);
        //Convert to PDF
        $pdf->loadHtml($html);
        $pdf->render();
        // nama file pdf yang di hasilkan 
        $pdf->stream("laporan_data_invoice.pdf", [
            'Attachment' => 0
        ]);
    }
    public function export_excel()
    {
        $data = array(
            'title' => 'Laporan Invoice',
            'invoice' => $this->model_invoice->tampil_data()
        );
        $this->load->view('admin/export_excel_invoice', $data);
    }
}
