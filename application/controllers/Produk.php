<?php

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['produk'] = $this->Produk_model->get_all_produk();
        $this->load->view('produk/index', $data);
    }

    public function tambah()
    {
        $this->load->view('produk/tambah');
    }

    public function simpan()
    {
        $data = array(
            'kodebarang' => $this->input->post('kodebarang'),
            'namabarang' => $this->input->post('namabarang'),
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $this->input->post('harga')
        );

        $this->Produk_model->insert_produk($data);
        redirect('produk');
    }

    public function edit($kodebarang)
    {
        $data['produk'] = $this->Produk_model->get_produk_by_id($kodebarang);
        $this->load->view('produk/edit', $data);
    }
    public function batal($kodebarang)
    {
        $data['produk'] = $this->Produk_model->get_produk_by_id($kodebarang);
        $this->load->view('produk/edit', $data);
    }

    public function update()
    {
        $kodebarang = $this->input->post('kodebarang');

        $data = array(
            'kodebarang' => $this->input->post('kodebarang'),
            'namabarang' => $this->input->post('namabarang'),
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $this->input->post('harga')
        );

        $this->Produk_model->update_produk($kodebarang, $data);
        redirect('produk');
    }

    public function hapus($kodebarang)
    {
        $this->Produk_model->delete_produk($kodebarang);
        redirect('produk');
    }
}