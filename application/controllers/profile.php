<?php

use PharIo\Manifest\Email;

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barangadmin_model");
        is_logged_in();
    }

    public function index()
    {


        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'My Profile';


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_Us');
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/profile/profile', $data);
        $this->load->view('templates/footer');
    }
}
