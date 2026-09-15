<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "third_party/dompdf/autoload.php";

use Dompdf\Dompdf;

class Laporan_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporan_barang', $data);
        $this->load->view('templates_admin/footer');
    }
    public function cetak_laporan_barang()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();

        $this->load->view('admin/laporan_print_barang', $data);
    }
    public function laporan_barang_pdf()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();

        $this->load->view('admin/laporan_pdf_barang', $data);

        $paper_size  = 'A4'; // ukuran kertas 
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape 
        $html = $this->output->get_output();

        $pdf = new Dompdf();

        $pdf->setPaper($paper_size, $orientation);
        //Convert to PDF
        $pdf->loadHtml($html);
        $pdf->render();
        // nama file pdf yang di hasilkan 
        $pdf->stream("laporan_data_barang.pdf", [
            'Attachment' => 0
        ]);
    }
    public function export_excel()
    {
        $data = array(
            'title' => 'Laporan Barang',
            'barang' => $this->model_barang->tampil_data()->result()
        );
        $this->load->view('admin/export_excel_barang', $data);
    }
}
