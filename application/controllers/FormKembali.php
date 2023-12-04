<?php

use PharIo\Manifest\Email;

defined('BASEPATH') or exit('No direct script access allowed');

class FormKembali extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("formpinjam_model");
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'My Profile';
        $user_id = $this->session->id;
        $data['formpinjam'] = $this->formpinjam_model->getAll($user_id);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_Us',);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/formkembali/index', $data);
        $this->load->view('templates/footer');
    }
}
