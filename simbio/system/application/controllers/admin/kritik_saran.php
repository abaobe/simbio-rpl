<?php

class Kritik_saran extends Controller {

    function Kritik_saran()
    {
        parent::Controller();
        $this->load->model('M_krisan', 'krisan');
    }


    function index()
    {
        redirect('admin/kritik_saran/tampil');
    }

    function tampil($halaman = 0)
    {
        $data = array();

        $this->load->library('pagination');

        $mulai = $this->uri->segment(4, 0);
        $limit_per_halaman = 10;

        $data['daftar_krisan'] = $this->krisan->get_semua_krisan($mulai, $limit_per_halaman);

        $paging['base_url']     = site_url('admin/kritik_saran/tampil');
        $paging['total_rows']   = $this->krisan->jumlah_data_hasil;
        $paging['per_page']     = $limit_per_halaman;
        $paging['uri_segment']  = 4;
        $paging['next_link'] 	= 'Berikutnya &raquo;';
        $paging['prev_link'] 	= '&laquo; Sebelumnya ';
        $paging['first_link']   = '&lsaquo; Awal';
        $paging['last_link']   = 'Akhir &rsaquo;';

        $this->pagination->initialize($paging);
	$data['page_links'] = $this->pagination->create_links();

        $data['template_konten'] = "admin/admin_krisan";

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

    function hapus($id_krisan)
    {
        $data = array();

        $this->db->where('id', $id_krisan);
        $deleted = $this->db->delete('tb_kritik_saran');

        $data['template_konten'] = 'admin/admin_krisan_deleted';

        $this->load->vars($data);
        if($deleted) $this->load->view('admin/template');
    }

    function approve($id_krisan)
    {
        $this->db->where('id', $id_krisan);
        $this->db->update('tb_kritik_saran', array('approved' => 1));

        redirect($_SERVER['HTTP_REFERER']);
    }

    function unapprove($id_krisan)
    {
        $this->db->where('id', $id_krisan);
        $this->db->update('tb_kritik_saran', array('approved' => 0));

        redirect($_SERVER['HTTP_REFERER']);
    }


}