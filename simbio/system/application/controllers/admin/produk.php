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
        $data['template_konten'] = 'admin/admin_produk';

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

    function tambah()
    {
        $data = array();
        $berhasil_ditambahkan = 0;

        // kalo disubmit

        if($this->input->post('submit'))
        {
            $update_data = array(
                'nama_produk'       => $this->input->post('nama_produk'),
                'info_produk'       => $this->input->post('info_produk'),
                'gambar_produk_1'   => $this->input->post('gambar_produk_1'),
                'gambar_produk_2'   => $this->input->post('gambar_produk_2'),
                'gambar_produk_3'   => $this->input->post('gambar_produk_3'),
                'stok_produk'       => $this->input->post('stok_produk'),
                'harga_produk'      => $this->input->post('harga_produk'),
                'diskon'            => $this->input->post('diskon'),
                'harga_diskon'      => ($this->input->post('diskon') == 0) ? 0 : $this->input->post('harga_produk') - $this->input->post('harga_produk') * $this->input->post('diskon') / 100,
                'tanggal_update_produk' => date('Y-m-d H:i:s')
            );

            $berhasil_ditambahkan = $this->db->insert('tb_produk', $update_data);

        }

        if ($berhasil_ditambahkan) redirect('admin/produk/ok');

        $data['template_konten'] = 'admin/admin_produk_tambah';

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

    function ok()
    {
        $data = array();
        $data['template_konten'] = 'admin/admin_produk_tambah_ok';

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

    function edit($id_produk)
    {
        $data = array();
        $data['updated'] = 0;

        // kalo disubmit

        if($this->input->post('submit'))
        {
            $update_data = array(
                'nama_produk'       => $this->input->post('nama_produk'),
                'info_produk'       => $this->input->post('info_produk'),
                'gambar_produk_1'   => $this->input->post('gambar_produk_1'),
                'gambar_produk_2'   => $this->input->post('gambar_produk_2'),
                'gambar_produk_3'   => $this->input->post('gambar_produk_3'),
                'stok_produk'       => $this->input->post('stok_produk'),
                'harga_produk'      => $this->input->post('harga_produk'),
                'diskon'            => $this->input->post('diskon'),
                'harga_diskon'      => ($this->input->post('diskon') == 0) ? 0 : $this->input->post('harga_produk') - $this->input->post('harga_produk') * $this->input->post('diskon') / 100,
                'tanggal_update_produk' => date('Y-m-d H:i:s')
            );

            $this->db->where('id_produk', $id_produk);
            $data['updated'] = $this->db->update('tb_produk', $update_data);

        }

        $data['produk'] = $this->M_produk->get_produk($id_produk);
        $data['template_konten'] = 'admin/admin_produk_edit';

        $this->load->vars($data);
        $this->load->view('admin/template');
        
    }

    function hapus($id_produk)
    {
        $data = array();

        $this->db->where('id_produk', $id_produk);
        $deleted = $this->db->delete('tb_produk');

        $data['template_konten'] = 'admin/admin_produk_deleted';

        $this->load->vars($data);
        if($deleted) $this->load->view('admin/template');
    }

}
