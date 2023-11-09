<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
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
        $this->db->select('user.*,user_role.role');
        $this->db->from('user');
        $this->db->join('user_role','user.role_id=user_role.id');
        $query=$this->db->get()->result();

        return $query;
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();

        $role = $post["role_id"];
        if ($role == 1 ){
            $this->password= password_hash("admin", PASSWORD_DEFAULT);

        } else if ($role == 2){
            $this ->password= password_hash("user", PASSWORD_DEFAULT);

        }

        $this->name = $post["nama"];
        $this->role_id = $post["role_id"];
        $this->email= $post["email"];
        $this->is_actived = $post["is_actived"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->role_id = $post["role_id"];
        $this->is_actived = $post["is_actived"];
    
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}