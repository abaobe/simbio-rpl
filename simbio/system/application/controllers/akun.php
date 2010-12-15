<?php

class Akun extends Controller {

    function Akun()
    {
        parent::Controller();        
    }

    function index()
    {
        if(!$this->session->userdata('id_user'))
            redirect('akun/login');
        else
        {
            redirect('akun/user');
        }
    }

    function registrasi()
    {

        // kalo form disubmit
        if ($this->input->post('submit'))
        {
            // validasi dulu

            $this->load->library('form_validation');

            $this->form_validation->set_rules('input_nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('input_alamat', 'Alamat', 'trim|required');
            $this->form_validation->set_rules('input_kodepos', 'Kode pos', 'trim|required|numeric');
            $this->form_validation->set_rules('input_telepon', 'Telepon', 'trim|required');
            $this->form_validation->set_rules('input_nktp', 'No. KTP', 'trim|required|required|numeric');
            $this->form_validation->set_rules('input_email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('input_username', 'Username', 'trim|required|alpha_numeric|min_length[6]');
            $this->form_validation->set_rules('input_password', 'Password', 'trim|required|min_length[6]');

            if ($this->form_validation->run() == FALSE)
            {
                // on error
            }
            else
            {
                // on success: insertion!

                $data_registrasi = array(
                    'username' => $this->input->post('input_username'),
                    'password' => md5($this->input->post('input_password')),
                    'nama_lengkap' => $this->input->post('input_nama'),
                    'alamat' => $this->input->post('input_alamat'),
                    'kode_pos' => $this->input->post('input_kodepos'),
                    'no_telepon' => $this->input->post('input_telepon'),
                    'no_ktp' => $this->input->post('input_nktp'),
                    'email' => $this->input->post('input_email'),
                    'tanggal_registrasi' => date('Y-m-d H:i:s'),
                    'aktif' => 1
                );

                $this->db->insert('tb_user', $data_registrasi);
                redirect('akun/registrasi_ok');

            }
        }


        $data['judul'] = "Akun - Registrasi";
        $data['template_konten'] = 'template_akun_registrasi';

        $this->load->vars($data);
        $this->load->view('template');
    }

    function registrasi_ok()
    {
        $data['judul'] = "Akun - Registrasi";
        $data['template_konten'] = 'template_akun_registrasi_selesai';

        $this->load->vars($data);
        $this->load->view('template');
    }

    function login()
    {
        // jangan login ulang
        if($this->session->userdata('id_user'))
            redirect('akun/user');

        if($this->input->post('login_submit'))
        {
            $userdata = array();
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $this->db->where('aktif', 1);
            $q = $this->db->get('tb_user');

            if($q->num_rows() > 0)
            {
                $userdata = $q->row_array();
                $this->session->set_userdata($userdata);

                if($this->input->post('aksi') == 'langsung_ke_checkout')
                    redirect('checkout/member');
                else
                    redirect('akun/user');
            }
            else
            {
                $data['error'] = "Username atau password salah";
            }

        }



        $data['judul'] = "Akun - Login";
        $data['judul_konten'] = "Login";
        $data['template_konten'] = 'template_akun_login';

        $this->load->vars($data);
        $this->load->view('template');
    }

    function logout()
    {
        $this->session->sess_destroy();

        redirect('akun/logout_ok');
    }

    function logout_ok()
    {
        $data['judul'] = "Akun - Logout";
        $data['judul_konten'] = "Anda telah logout";
        $data['template_konten'] = 'template_akun_logout';

        $this->load->vars($data);
        $this->load->view('template');

    }


    function user()
    {
        // jangan ke sini kalo belom login
        if(!$this->session->userdata('id_user'))
            redirect('akun/login');

        $this->load->model('M_pesanan');

        $data['daftar_pesanan'] = $this->M_pesanan->get_pesanan($this->session->userdata('id_user'));
        $data['judul'] = "Akun Saya";
        $data['template_konten'] = 'template_akun';

        $this->load->vars($data);
        $this->load->view('template');
    }

    function edit_profil()
    {
        // jangan ke sini kalo belom login
        if(!$this->session->userdata('id_user'))
            redirect('akun/login');

        // kalo form disubmit
        if ($this->input->post('submit'))
        {
            // validasi dulu

            $this->load->library('form_validation');

            $this->form_validation->set_rules('input_nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('input_alamat', 'Alamat', 'trim|required');
            $this->form_validation->set_rules('input_kodepos', 'Kode pos', 'trim|required|numeric');
            $this->form_validation->set_rules('input_telepon', 'Telepon', 'trim|required');
            $this->form_validation->set_rules('input_nktp', 'No. KTP', 'trim|required|required|numeric');
            $this->form_validation->set_rules('input_email', 'Email', 'trim|required|valid_email');

            if ($this->form_validation->run() == FALSE)
            {
                // on error
            }
            else
            {
                // on success: update

                $data_profil = array(
                    'nama_lengkap' => $this->input->post('input_nama'),
                    'alamat' => $this->input->post('input_alamat'),
                    'kode_pos' => $this->input->post('input_kodepos'),
                    'no_telepon' => $this->input->post('input_telepon'),
                    'no_ktp' => $this->input->post('input_nktp'),
                    'email' => $this->input->post('input_email'),
                );

                $this->db->where('id_user', $this->session->userdata('id_user'));
                $this->db->update('tb_user', $data_profil);

                $data['updated'] = true;
            }
        }

        // ambil data user buat diedit
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $q = $this->db->get('tb_user');
        $data['user_data'] = $q->row_array();

        $data['judul'] = "Edit Profil Saya";
        $data['template_konten'] = 'template_akun_editprofil';

        $this->load->vars($data);
        $this->load->view('template');
    }

    function ubah_password()
    {
        // jangan ke sini kalo belom login
        if(!$this->session->userdata('id_user'))
            redirect('akun/login');

        // kalo form disubmit
        if ($this->input->post('submit'))
        {
            // validasi dulu

            $this->load->library('form_validation');

            $this->form_validation->set_rules('input_password2', 'Password', 'required|matches[input_password3]');
            $this->form_validation->set_rules('input_password3', 'Konfirmasi password', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                // on error
            }
            else
            {
                // on success: update

                $data_profil = array(
                    'password' => md5($this->input->post('input_password2')),
                );

                $this->db->where('id_user', $this->session->userdata('id_user'));
                $this->db->update('tb_user', $data_profil);

                $data['updated'] = true;
            }
        }

        $data['judul'] = "Ubah Password";
        $data['template_konten'] = 'template_akun_ubahpass';

        $this->load->vars($data);
        $this->load->view('template');
    }

    function detail_pesanan($id_pesanan)
    {
        // jangan ke sini kalo belom login
        if(!$this->session->userdata('id_user'))
            redirect('akun/login');

        $this->load->model('M_pesanan');

        $data['daftar_produk_pesanan'] = $this->M_pesanan->get_detail_pesanan($id_pesanan);
        $data['judul'] = "Detail pesanan #" . $id_pesanan;
        $data['template_konten'] = 'template_akun_detailpesanan';

        $this->load->vars($data);
        $this->load->view('template');
    }


}
