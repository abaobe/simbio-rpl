<?php

class Produk extends Controller {

    function Produk()
    {
        parent::Controller();
    }

    function index()
    {
        $data = array();
        $data['daftar_produk'] = $this->M_produk->get_semua_produk();
        $data['judul'] = "Semua Produk";
        $data['judul_konten'] = "Semua Produk";
        $data['template_konten'] = 'template_produk';

        $this->load->vars($data);
        $this->load->view('template');

    }

    function detail($id, $name = '')
    {
        $data = array();
        $data['produk'] = $this->M_produk->get_produk($id);
        $data['judul'] = 'Detail Produk: ' . $data['produk']['nama_produk'];
        $data['judul_konten'] = $data['produk']['nama_produk'];
        $data['template_konten'] = 'template_detail_produk';

        $this->load->vars($data);
        $this->load->view('template');
    }


}