<?php defined('BASEPATH') or exit('No direct script access allowed');

class FormPinjam_model extends CI_Model
{
    private $_table = "tb_peminjam";

    public $id;
    public $tgl_peminjaman;
    public $tgl_pengembalian;
    public $is_completed;
    public $id_user;
    public $id_barang;
    public $jumlah_barang;
    public $tujuan;


    public function getAll($user_id)
    {
        $this->db->select('tb_peminjam.*,tb_barang.nama_barang');
        $this->db->from('tb_peminjam');
        $this->db->join('tb_barang', 'tb_peminjam.id_barang=tb_barang.id_barang');
        $this->db->where('tb_peminjam.id_user=', $user_id);
        $query = $this->db->get()->result();

        return $query;


        return $this->db->get($this->_table)->result();
    }

    public function getActive()
    {
        return $this->db->get_where($this->_table, ["is_actived" => 1])->result();
    }


    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();

        // $this->tgl_peminjaman = $post["tgl_peminjaman"];
        // $this->is_completed = 0;
        // $this->db->insert($this->_table, $this);
        // $insert_id = $this->db->insert_id();

        // $this->id_peminjam = $insert_id;
        // $this->id_user = $post["user_id"];
        // $this->jumlah_barang = $post["jumlah_barang"];
        // $this->id_barang = $post["id_barang"];
        // $this->db->insert("tb_detail_peminjaman");

        $this->tgl_peminjaman = $post["tgl_peminjaman"];
        $this->tgl_pengembalian = $post["tgl_pengembalian"];
        $this->tujuan = $post["tujuan"];
        $this->id_user = $post["id_user"];
        $this->jumlah_barang = $post["jumlah_barang"];
        $this->id_barang = $post["id_barang"];
        $this->is_completed = 0;

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->is_actived = $post["is_actived"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
