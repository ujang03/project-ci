<?php

use PharIo\Manifest\Email;

defined('BASEPATH') or exit('No direct script access allowed');

class AdminBarang extends CI_Controller
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
        $data['title'] = 'Dasboard Admin';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_Ad',);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/barang/index', $data);
        $this->load->view('templates/footer');
    }
    public function store()
    {
        $barang=$this->barangadmin_model;
        $barang->save();

        $this->load->view('admin/barang/index');
    }
}
