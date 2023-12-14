<?php

use PharIo\Manifest\Email;

defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("barangadmin_model");
        $this->load->model("checkpinjam_model");
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dasboard Admin';
        $data['reportadmin'] = $data['barang'] = $this->checkpinjam_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_Ad',);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/report/index', $data);
        $this->load->view('templates/footer');
    }
}
