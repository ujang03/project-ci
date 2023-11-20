<?php

use PharIo\Manifest\Email;

defined('BASEPATH') or exit('No direct script access allowed');

class FormPinjam extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barangadmin_model");
    }

    public function index()
    {
        $data['barang'] = $this->barangadmin_model->getAll();
        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'My Profile';


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

        redirect('admin/barang');
    }
}
