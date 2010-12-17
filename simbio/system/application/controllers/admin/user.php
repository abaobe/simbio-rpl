<?php

class User extends Controller {

    function User()
    {
        parent::Controller();
        $this->load->model('M_user', 'user');
    }


    function index()
    {
        $data = array();
        $data['daftar_user'] = $this->user->get_semua_user();
        $data['template_konten'] = 'admin/admin_user';

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
                'username'          => $this->input->post('username'),
                'password'          => md5($this->input->post('password')), // encrypt
                'nama_lengkap'      => $this->input->post('nama_lengkap'),
                'alamat'            => $this->input->post('alamat'),
                'kode_pos'          => $this->input->post('kode_pos'),
                'no_telepon'        => $this->input->post('no_telepon'),
                'no_ktp'            => $this->input->post('no_ktp'),
                'email'             => $this->input->post('email'),
                'aktif'             => $this->input->post('aktif'),
                'tanggal_registrasi'=> date('Y-m-d H:i:s')
            );

            $berhasil_ditambahkan = $this->db->insert('tb_user', $insert_data);

        }

        if ($berhasil_ditambahkan) redirect('admin/user/ok');

        $data['template_konten'] = 'admin/admin_user_tambah';

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

    function ok()
    {
        $data = array();
        $data['template_konten'] = 'admin/admin_user_tambah_ok';

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

    function edit($id_user)
    {
        $data = array();
        $data['updated'] = 0;

        // kalo disubmit

        if($this->input->post('submit'))
        {
            $update_data = array(
                'username'          => $this->input->post('username'),
                'nama_lengkap'      => $this->input->post('nama_lengkap'),
                'alamat'            => $this->input->post('alamat'),
                'kode_pos'          => $this->input->post('kode_pos'),
                'no_telepon'        => $this->input->post('no_telepon'),
                'no_ktp'            => $this->input->post('no_ktp'),
                'email'             => $this->input->post('email'),
                'aktif'             => $this->input->post('aktif'),
            );

            // kalo passwordnya gak kosong, berarti diubah
            if($this->input->post('password') != "")
            {
                $update_data['password'] = md5($this->input->post('password'));
            }

            $this->db->where('id_user', $id_user);
            $data['updated'] = $this->db->update('tb_user', $update_data);

        }

        $data['user'] = $this->user->get_user($id_user);
        $data['template_konten'] = 'admin/admin_user_edit';

        $this->load->vars($data);
        $this->load->view('admin/template');

    }

    function hapus($id_user)
    {
        $data = array();

        $this->db->where('id_user', $id_user);
        $deleted = $this->db->delete('tb_user');

        $data['template_konten'] = 'admin/admin_user_deleted';

        $this->load->vars($data);
        if($deleted) $this->load->view('admin/template');
    }

}
