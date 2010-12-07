<?php

// keranjang belanja........

class Keranjang_belanja extends Controller {

    function Keranjang_belanja()
    {
        parent::Controller();
        $this->load->model('M_keranjang', 'keranjang');
    }

    function _display()
    {
        $data['judul'] = 'Keranjang Belanja';
        $data['template_konten'] = 'template_keranjang_belanja';

        $this->load->vars($data);
        $this->load->view('template');
    }

    function index()
    {
        //$data['daftar_produk'] = $this->keranjang->get_daftar_produk();

        $this->_display();
    }

    function tambah($id_produk, $jumlah = 1)
    {

        $produk = $this->M_produk->get_produk($id_produk);

        $data_produk = array(
            'id' => $produk['id_produk'],
            'qty' => $jumlah,
            'price' => $produk['harga_produk'],
            'name' => $produk['nama_produk'],
            'pic' => $produk['gambar_produk_1']
        );

        $this->cart->insert($data_produk);

        redirect('keranjang_belanja');

    }

    function update()
    {
        for ($i = 1; $i <= $this->cart->total_items(); $i++)
        {
            $this->cart->update($this->input->post("$i"));
        }

        redirect('keranjang_belanja');

    }

    function hapus($row_id)
    {
        $this->cart->update(array('rowid' => $row_id, 'qty' => 0));

        redirect('keranjang_belanja');

    }


}