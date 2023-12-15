<?php

use PharIo\Manifest\Email;


defined('BASEPATH') or exit('No direct script access allowed');

class FormPinjam extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barangadmin_model");
        $this->load->model("formpinjam_model");
    }

    public function index()
    {
        $data['barang'] = $this->barangadmin_model->getAll();
        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'My Profile';
        $user_id = $this->session->id;
        $data['formpinjam'] = $this->formpinjam_model->getAll($user_id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_Us',);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/formpinjam/index', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $barang = $this->formpinjam_model;
        $barang->save();

        redirect('user/formpinjam');
    }

    public function prints($id)
    {
        $data['cetakpinjam'] = $this->formpinjam_model->getById($id);
        $this->load->view('user/formpinjam/print', $data);
    }

    public function print($id)
    {

        $data['cetakpinjam'] = $this->formpinjam_model->getById($id);

        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdf');

        // title dari pdf
        $data['title_pdf'] = 'Laporan Peminjaman Barang';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_peminjaman_barang';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";

        $html = $this->load->view('user/formpinjam/print', $data, true);

        // run dompdf
        $this->pdf->generate($html, $file_pdf, $paper, $orientation);
    }
}
