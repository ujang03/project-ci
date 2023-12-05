<?php

use PharIo\Manifest\Email;

defined('BASEPATH') or exit('No direct script access allowed');

class CheckPinjam extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barangadmin_model");
        $this->load->model("checkpinjam_model");
    }

    public function index()
    {
        $data['barang'] = $this->checkpinjam_model->getAll();
        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dasboard Admin';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_Ad',);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/checkpinjam/index', $data);
        $this->load->view('templates/footer');
    }

    public function approve($id)
    {
        $pinjam = $this->checkpinjam_model;
        $approve = $pinjam->approve($id);


        redirect('admin/checkpinjam');
    }

    public function return($id)
    {
        $pinjam = $this->checkpinjam_model;
        $pinjam->return($id);


        redirect('admin/checkpinjam');
    }

    public function disapprove($id)
    {
        $pinjam = $this->checkpinjam_model;
        $pinjam->disapprove($id);


        redirect('admin/checkpinjam');
    }

    public function reject($id)
    {
        $pinjam = $this->checkpinjam_model;
        $pinjam->reject($id);

        redirect('admin/checkpinjam');
    }
}
