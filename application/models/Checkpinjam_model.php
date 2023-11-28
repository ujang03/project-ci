<?php defined('BASEPATH') or exit('No direct script access allowed');

class Checkpinjam_model extends CI_Model
{
    private $_table = "tb_peminjam";

    public $id;
    public $tgl_peminjaman;
    public $tgl_pengembalian;
    public $is_completed;



    public function getAll()
    {
        $this->db->select('tb_peminjam.*,tb_barang.nama_barang,user.name');
        $this->db->from('tb_peminjam');
        $this->db->join('tb_barang', 'tb_peminjam.id_barang=tb_barang.id_barang');
        $this->db->join('user', 'tb_peminjam.id_user=user.id');
        $query = $this->db->get()->result();

        return $query;
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
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

    public function approve($id)
    {
        $query = $this->db->select('jumlah_barang,id_barang')->where('id', $id)->get('tb_peminjam')->row();
        $jumlah_minjam = $query->jumlah_barang;
        $idbarang = $query->id_barang;

        $queryBarang = $this->db->select('stok_barang')->where('id_barang', $idbarang)->get('tb_barang')->row();
        $stok_barang = $queryBarang->stok_barang;

        $jb_sekarang = $stok_barang - $jumlah_minjam;

        $this->db->set('stok_barang', $jb_sekarang)->where('id_barang', $idbarang)->update('tb_barang');
        $this->db->set('is_completed', 1)->where('id', $id)->update($this->_table);

        return "Berhasil Update";
    }

    public function disapprove($id)
    {
        $data = array('is_completed' => 2);
        return $this->db->update($this->_table, $data, array('id' => $id));
    }
}
