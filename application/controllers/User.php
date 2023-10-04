<?php

use PharIo\Manifest\Email;

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['Email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Index User';
        $this->load->view('user/index',$data);
    }
}
