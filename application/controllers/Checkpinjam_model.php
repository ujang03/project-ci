<?php defined('BASEPATH') OR exit('No direct script access allowed');

class BarangAdmin_model extends CI_Model
{
    private $_table = "tb_peminjam";

    public $id;
    public $tgl_peminjaman;
    public $tgl_pengembalian;
    public $is_complited;



    public function getAll()
    {
        $this->db->select('tb_peminjam.*,user.nama');
        $this->db->from('tb_peminjam');
        $this->db->join('user','tb_peminjam.jenis_barang=tb_jenis_barang.id');
        $query=$this->db->get()->result();

        return $query;
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_barang" => $id])->row();
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
        $this->id_barang = $post["id_barang"];
        $this->nama_barang = $post["nama_barang"];
        $this->stok_barang = $post["stok_barang"];
        $this->jenis_barang = $post["jenis_barang"];
        return $this->db->update($this->_table, $this, array('id_barang' => $post['id_barang']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_barang" => $id));
    }
}