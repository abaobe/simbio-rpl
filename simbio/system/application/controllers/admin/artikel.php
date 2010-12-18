<?php

class Artikel extends Controller {

    function Artikel()
    {
        parent::Controller();
        $this->load->model('M_artikel', 'artikel');

        if(!$this->session->userdata('admin_login'))
            redirect('admin/login');
    }

    function index()
    {
        $data = array();
        $data['daftar_artikel'] = $this->artikel->get_semua_artikel();
        $data['template_konten'] = 'admin/admin_artikel';

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
            $insert_data = array(
                'judul_artikel'         => $this->input->post('judul_artikel'),
                'isi_artikel'           => $this->input->post('isi_artikel'),
                'tanggal_posting' => date('Y-m-d H:i:s')
            );

            $berhasil_ditambahkan = $this->db->insert('tb_artikel', $insert_data);

        }

        if ($berhasil_ditambahkan) redirect('admin/artikel/ok');

        $data['template_konten'] = 'admin/admin_artikel_tambah';

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

    function ok()
    {
        $data = array();
        $data['template_konten'] = 'admin/admin_artikel_tambah_ok';

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

    function edit($id_artikel)
    {
        $data = array();
        $data['updated'] = 0;

        // kalo disubmit

        if($this->input->post('submit'))
        {
            $update_data = array(
                'judul_artikel'         => $this->input->post('judul_artikel'),
                'isi_artikel'           => $this->input->post('isi_artikel')
            );

            $this->db->where('id_artikel', $id_artikel);
            $data['updated'] = $this->db->update('tb_artikel', $update_data);

        }

        $data['artikel'] = $this->artikel->get_artikel($id_artikel);
        $data['template_konten'] = 'admin/admin_artikel_edit';

        $this->load->vars($data);
        $this->load->view('admin/template');

    }
    
    function hapus($id_artikel)
    {
        $data = array();

        $this->db->where('id_artikel', $id_artikel);
        $deleted = $this->db->delete('tb_artikel');

        $data['template_konten'] = 'admin/admin_artikel_deleted';

        $this->load->vars($data);
        if($deleted) $this->load->view('admin/template');
    }

}