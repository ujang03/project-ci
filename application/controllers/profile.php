<?php

use PharIo\Manifest\Email;

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
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

    public function profile()
    {

        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'My Profile';


        $currentpassword = $this->input->post('currentpassword');
        $newpassword = $this->input->post('newpassword');

        if (!password_verify($currentpassword, $data['user']['password'])) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> 
                Wrong Old Password!</div>');
            redirect('user/profile');
        } else {
            if ($currentpassword != $newpassword) {
                $password_hash = password_hash($newpassword, PASSWORD_DEFAULT);
                $this->db->set('password', $password_hash);
                $this->db->where('email', $this->session->userdata('email'));
                $this->db->update('user');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
                    Password is Changed!</div>');
                redirect('user/profile');
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> 
                    NEW Password cannot be the same as Old Password!</div>');
                redirect('user/profile');
            }
        }
    }
}
