<?php

use PharIo\Manifest\Email;

defined('BASEPATH') or exit('No direct script access allowed');

class JenisBarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jenisbarang_model");
        is_logged_in();
    }

    public function index()
    {
        $data['jenis'] = $this->jenisbarang_model->getAll();
        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dasboard Admin';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_Ad',);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/jenisbarang/index', $data);
        $this->load->view('templates/footer');
    }
    public function store()
    {
        $barang=$this->jenisbarang_model;
        $barang->save();

        redirect('admin/jenisbarang');
    }

    public function edit($id){
        $query = $this->jenisbarang_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['dataJenisBarang'] = $query;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_Ad',);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/jenisbarang/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update(){
        $barang=$this->jenisbarang_model;
        $barang->update();

        redirect('admin/jenisbarang');
    }

    public function delete($id){
        if($this->jenisbarang_model->delete($id)){
            redirect('admin/jenisbarang');
        }
    }
}
