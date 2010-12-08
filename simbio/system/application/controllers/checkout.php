<?php

class Checkout extends Controller {

    function Checkout()
    {
        parent::Controller();
    }

    function index()
    {
        // kalo udah login, langsung lempar
        if($this->session->userdata('id_user'))
        {
            redirect('checkout/member');
        }

        // pemroses submit, pilihan opsi (register/guest)
        if ($this->input->post('options'))
        {
            if($this->input->post('account') == 'guest')
            {
                redirect('checkout/tamu');
            }
        }

        if($this->cart->total() == 0) redirect('home');

        $data['judul'] = "Checkout - Login";
        $data['template_konten'] = 'template_checkout_login';

        $this->load->vars($data);
        $this->load->view('template');
    }

    function tamu()
    {
        if($this->cart->total() == 0) redirect('home');
        
        // pemroses submit

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
                // on success: insertion!

                $data_pesanan = array(
                    'id_user' => 0,
                    'nama_pemesan' => $this->input->post('input_nama'),
                    'alamat' => $this->input->post('input_alamat'),
                    'kode_pos' => $this->input->post('input_kodepos'),
                    'no_telepon' => $this->input->post('input_telepon'),
                    'no_ktp' => $this->input->post('input_nktp'),
                    'email' => $this->input->post('input_email'),
                    'metode_pembayaran' => $this->input->post('metode_bayar'),
                    'total_biaya' => $this->cart->total(),
                    'status_pengiriman' => 0,
                    'tanggal_pemesanan' => date('Y-m-d H:i:s'),
                    'alamat_ip' => $_SERVER['REMOTE_ADDR']
                );

                // ke tabel pesanan
                $this->db->insert('tb_pesanan', $data_pesanan);
                
                $id_pesanan = $this->db->insert_id();

                // ke produk pesanan
                foreach($this->cart->contents() as $produk)
                {
                    $data_produk_pesanan = array(
                        'id_pesanan' => $id_pesanan,
                        'id_produk' => $produk['id'],
                        'nama_produk' => $produk['name'],
                        'harga_produk' => $produk['price'],
                        'jumlah_dipesan' => $produk['qty'],
                        'total_harga' => $produk['subtotal']
                    );

                    $this->db->insert('tb_produk_pesanan', $data_produk_pesanan);
                }

                $this->cart->destroy();
                redirect('checkout/selesai');
            }
            
        }



        $data['judul'] = "Checkout - Tamu";
        $data['template_konten'] = 'template_checkout_tamu';

        $this->load->vars($data);
        $this->load->view('template');
        
    }

    // checkout/member
    function member()
    {
        if($this->cart->total() == 0) redirect('home');

        // pemroses submit

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
                // on success: insertion!

                $data_pesanan = array(
                    'id_user' => $this->session->userdata('id_user'),
                    'nama_pemesan' => $this->input->post('input_nama'),
                    'alamat' => $this->input->post('input_alamat'),
                    'kode_pos' => $this->input->post('input_kodepos'),
                    'no_telepon' => $this->input->post('input_telepon'),
                    'no_ktp' => $this->input->post('input_nktp'),
                    'email' => $this->input->post('input_email'),
                    'metode_pembayaran' => $this->input->post('metode_bayar'),
                    'total_biaya' => $this->cart->total(),
                    'status_pengiriman' => 0,
                    'tanggal_pemesanan' => date('Y-m-d H:i:s'),
                    'alamat_ip' => $_SERVER['REMOTE_ADDR']
                );

                // ke tabel pesanan
                $this->db->insert('tb_pesanan', $data_pesanan);

                $id_pesanan = $this->db->insert_id();

                // ke produk pesanan
                foreach($this->cart->contents() as $produk)
                {
                    $data_produk_pesanan = array(
                        'id_pesanan' => $id_pesanan,
                        'id_produk' => $produk['id'],
                        'nama_produk' => $produk['name'],
                        'harga_produk' => $produk['price'],
                        'jumlah_dipesan' => $produk['qty'],
                        'total_harga' => $produk['subtotal']
                    );

                    $this->db->insert('tb_produk_pesanan', $data_produk_pesanan);
                }

                $this->cart->destroy();
                redirect('checkout/selesai');
            }

        }

        $this->db->where('id_user', $this->session->userdata('id_user'));
        $q = $this->db->get('tb_user');
        $data['user_data'] = $q->row_array();

        $data['judul'] = "Checkout - Member";
        $data['template_konten'] = 'template_checkout_member';

        $this->load->vars($data);
        $this->load->view('template');
    }

    function selesai()
    {
        $data['judul'] = "Checkout - Selesai";
        $data['template_konten'] = 'template_checkout_selesai';

        $this->load->vars($data);
        $this->load->view('template');
        
    }

}