<?php

class Pesanan extends Controller {

    function Pesanan()
    {
        parent::Controller();
        $this->load->model('M_pesanan', 'pesanan');

        if(!$this->session->userdata('admin_login'))
            redirect('admin/login');
    }


    function index()
    {
        redirect('admin/pesanan/tampil');
    }

    function tampil($halaman = 0)
    {
        $data = array();

        $this->load->library('pagination');

        $mulai = $this->uri->segment(4, 0);
        $limit_per_halaman = 10;

        $data['daftar_pesanan'] = $this->pesanan->get_semua_pesanan($mulai, $limit_per_halaman);

        $paging['base_url']     = site_url('admin/pesanan/tampil');
        $paging['total_rows']   = $this->pesanan->jumlah_data_hasil;
        $paging['per_page']     = $limit_per_halaman;
        $paging['uri_segment']  = 4;
        $paging['next_link'] 	= 'Berikutnya &raquo;';
        $paging['prev_link'] 	= '&laquo; Sebelumnya ';
        $paging['first_link']   = '&lsaquo; Awal';
        $paging['last_link']   = 'Akhir &rsaquo;';

        $this->pagination->initialize($paging);
	$data['page_links'] = $this->pagination->create_links();

        $data['template_konten'] = "admin/admin_pesanan";

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

    function sudah_dikirim($id)
    {
        $this->db->where('id_pesanan', $id);
        $this->db->update('tb_pesanan', array('status_pengiriman' => 1));

        redirect($_SERVER['HTTP_REFERER']);
    }

    function belum_dikirim($id)
    {
        $this->db->where('id_pesanan', $id);
        $this->db->update('tb_pesanan', array('status_pengiriman' => 0));

        redirect($_SERVER['HTTP_REFERER']);
    }

    function hapus($id)
    {
        $data = array();

        $this->db->where('id_pesanan', $id);
        $deleted = $this->db->delete('tb_pesanan');

        $this->db->where('id_pesanan', $id);
        $deleted2 = $this->db->delete('tb_produk_pesanan');


        $data['template_konten'] = 'admin/admin_pesanan_deleted';

        $this->load->vars($data);
        if($deleted && $deleted2) $this->load->view('admin/template');
    }

    function detail($id_pesanan)
    {
        $data = array();

        $data['daftar_produk_pesanan'] = $this->pesanan->get_detail_pesanan($id_pesanan);
        $data['id_pesanan'] = $id_pesanan;

        $data['template_konten'] = 'admin/admin_pesanan_detail';

        $this->load->vars($data);
        $this->load->view('admin/template_content_only');

    }

}