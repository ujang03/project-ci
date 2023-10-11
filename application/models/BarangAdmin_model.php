<?php defined('BASEPATH') OR exit('No direct script access allowed');

class BarangAdmin_model extends CI_Model
{
    private $_table = "tb_barang";

    public $id_barang;
    public $nama_barang;
    public $stok_barang;
    public $jenis_barang;



    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
    
        $this->nama_barang = $post["nama_barang"];
        $this->stok_barang = $post["stok_barang"];
        $this->jenis_barang = $post["jenis_barang"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        return $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}