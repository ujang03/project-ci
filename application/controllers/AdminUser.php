<?php

use PharIo\Manifest\Email;

defined('BASEPATH') or exit('No direct script access allowed');

class AdminUser extends CI_Controller
{
    public function __construct()
{
    parent::__construct();
    $this->load->model("user_model");


}
    public function index()
    {
        $data['dataUser'] = $this->user_model->getAll();
      
        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dasboard Admin';
    

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_Ad',);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/users/index', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $user=$this->user_model;
        $user->save();

        redirect('admin/user');
    }
}
