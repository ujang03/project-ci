<?php

use PharIo\Manifest\Email;

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        is_logged_in();
        if($this->session->userdata('role_id') !=1){
            $url=base_url('auth');
            redirect($url);
		};
    }
    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dasboard Admin';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_Ad', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}
