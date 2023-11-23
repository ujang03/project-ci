<?php

use PharIo\Manifest\Email;

defined('BASEPATH') or exit('No direct script access allowed');

class AdminUser extends CI_Controller
{
    public function __construct()
{
    parent::__construct();
    $this->load->model("user_model");
    $this->load->model("role_model");
    is_logged_in();

}
    public function index()
    {
        $data['roles']=$this->role_model->getAll();
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
      public function edit($id){
        $query = $this->user_model->getById($id);
        $data['roles']=$this->role_model->getAll();
        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['dataUser'] = $query;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_Ad',);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/users/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update(){
        $user=$this->user_model;
        $user->update();

        redirect('admin/user');
    }
}