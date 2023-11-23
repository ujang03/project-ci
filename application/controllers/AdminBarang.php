<?php

use PharIo\Manifest\Email;

defined('BASEPATH') or exit('No direct script access allowed');

class AdminBarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barangadmin_model");
        $this->load->model("jenisbarang_model");
        is_logged_in();
        

    }

    public function index()
    {
        $data['barang'] = $this->barangadmin_model->getAll();
        $data['jenis'] = $this->jenisbarang_model->getActive();
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

        redirect('admin/barang');
    }

    public function edit($id){
        $data['jenis'] = $this->jenisbarang_model->getAll();
        $query = $this->barangadmin_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['dataBarang'] = $query;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_Ad',);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/barang/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $barang=$this->barangadmin_model;
        $barang->update();

        redirect('admin/barang');
    }

    public function delete($id){
        if($this->barangadmin_model->delete($id)){
            redirect('admin/barang');
        }
    }
}
