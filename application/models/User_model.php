<?php defined('BASEPATH') OR exit('No direct script access allowed');

class USer_model extends CI_Model
{
    private $_table = "user";

    public $id;
    public $name;
    public $email;
    public $image;
    public $password;
    public $role_id;
    public $is_actived;




    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();

        $this->nama = $post["nama"];
        $this->is_actived = $post["is_actived"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["name"];
        $this->email = $post["email"];
        $this->is_actived = $post["is_actived"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}