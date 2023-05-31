<?php

class Produk_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_produk()
    {
        return $this->db->get('produk')->result_array();
    }

    public function get_produk_by_id($kodebarang)
    {
        return $this->db->get_where('produk', array('kodebarang' => $kodebarang))->row_array();
    }

    public function insert_produk($data)
    {
        $this->db->insert('produk', $data);
        return $this->db->insert_id();
    }

    public function update_produk($kodebarang, $data)
    {
        $this->db->where('kodebarang', $kodebarang);
        return $this->db->update('produk', $data);
    }

    public function delete_produk($kodebarang)
    {
        $this->db->where('kodebarang', $kodebarang);
        return $this->db->delete('produk');
    }
}