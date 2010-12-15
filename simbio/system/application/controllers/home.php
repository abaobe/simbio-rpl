<?php

class Home extends Controller {

    function Home()
    {
        parent::Controller();
    }

    function index()
    {
        $data = array();
        $data['judul'] = "Home";
        $data['judul_konten'] = "Selamat Datang";
        $data['template_konten'] = 'template_home';

        // 5 produk terbaru
        $data['produk_terbaru'] = $this->M_produk->get_produk_terbaru(5);

        // 5 artikel terbaru
        $this->load->model('M_artikel');
        $this->load->library('typography');
        $data['artikel_terbaru'] = $this->M_artikel->get_artikel_terbaru(5);

        $this->load->vars($data);
        $this->load->view('template');
    }

    function cari()
    {
        $kategori = $this->input->post('kategori');
        $kata_kunci = $this->input->post('q');

        $data = array();
        $data['judul'] = "Pencarian";
        $data['judul_konten'] = "Hasil Pencarian";
        $data['template_konten'] = "template_hasil_cari";
        $data['kata_kunci'] = $kata_kunci;

        if ($kata_kunci == '')
        {
            $data['kategori'] = 'error';
        }
        else
        {

            if($kategori == 'produk')
            {
                $data['kategori'] = 'produk';

                $this->load->model('M_cari');
                $data['hasil_cari'] = $this->M_cari->cari_produk($kata_kunci);

            }
            else if($kategori == 'artikel')
            {
                $data['kategori'] = 'artikel';

                $this->load->model('M_cari');
                $data['hasil_cari'] = $this->M_cari->cari_artikel($kata_kunci);

            }
            else die();
        }

        $this->load->vars($data);
        $this->load->view('template');

    }

    function kritik_saran($halaman = 0)
    {

        $data = array();
        $data['judul'] = "Kritik dan Saran";
        $data['judul_konten'] = "Kritik dan Saran";
        $data['template_konten'] = "template_krisan";

        $this->load->model('M_krisan');
        $this->load->library('typography');
        $this->load->library('pagination');
        $this->load->library('form_validation');

        // pemroses posting

        if ($this->input->post('submit'))
        {
            // validasi dulu

            $this->form_validation->set_rules('input_nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('input_email', 'Email', 'trim|valid_email');
            $this->form_validation->set_rules('input_telepon', 'Telepon', 'trim|required');
            $this->form_validation->set_rules('input_alamat', 'Alamat', 'trim|required');
            $this->form_validation->set_rules('input_pesan', 'Pesan', 'trim|required');

            if ($this->form_validation->run() == FALSE)
            {
                //redirect('home/kritik_saran#form');
            }
            else
            {
                // kalo valid

                if (!$this->session->userdata('id_user')) 
                {
                    // inputs - unregistered user
                    $udata = array();
                    $udata['id_user'] = 0;
                    $udata['nama'] = $this->input->post('input_nama', TRUE);
                    $udata['no_kontak'] = $this->input->post('input_telepon', TRUE);
                    $udata['alamat'] = $this->input->post('input_alamat', TRUE);
                    $udata['email'] = $this->input->post('input_email', TRUE);
                    $udata['pesan'] = $this->input->post('input_pesan', TRUE);
                    $udata['tanggal_posting'] = date('Y-m-d H:i:s');
                    $udata['approved'] = 0;
                    $udata['ip'] = $_SERVER['REMOTE_ADDR'];
                }
                else
                {
                    // inputs - registered user
                    $udata = array();
                    $udata['id_user'] = $this->session->userdata('id_user');
                    $udata['nama'] = $this->input->post('input_nama', TRUE);
                    $udata['no_kontak'] = $this->input->post('input_telepon', TRUE);
                    $udata['alamat'] = $this->input->post('input_alamat', TRUE);
                    $udata['email'] = $this->input->post('input_email', TRUE);
                    $udata['pesan'] = $this->input->post('input_pesan', TRUE);
                    $udata['tanggal_posting'] = date('Y-m-d H:i:s');
                    $udata['approved'] = 1;
                    $udata['ip'] = $_SERVER['REMOTE_ADDR'];
                }

                if ($this->M_krisan->tambahkan($udata)) redirect('kritik_saran_ok');

            }

        }


        // tampilkan


        $mulai = $this->uri->segment(2, 0);
        $limit_per_halaman = 10;

        $data['daftar_krisan'] = $this->M_krisan->get_entri_publik($mulai, $limit_per_halaman);

        $paging['base_url']     = site_url('kritik_saran');
        $paging['total_rows']   = $this->M_krisan->jumlah_data_hasil;
        $paging['per_page']     = $limit_per_halaman;
        $paging['uri_segment']  = 2;
        $paging['next_link'] 	= 'Berikutnya &raquo;';
        $paging['prev_link'] 	= '&laquo; Sebelumnya ';
        $paging['first_link']   = '&lsaquo; Awal';
        $paging['last_link']   = 'Akhir &rsaquo;';

        $this->pagination->initialize($paging);
	$data['page_links'] = $this->pagination->create_links();

        $this->load->vars($data);
        $this->load->view('template');

    }

    function kritik_saran_ok()
    {
        $data['success'] = TRUE;
        $data['judul'] = "Kritik dan Saran";
        $data['template_konten'] = "template_krisan_post";

        $this->load->vars($data);
        $this->load->view('template');

    }

    function tentang_kami()
    {
        $data['judul'] = "Tentang Kami";
        $data['template_konten'] = "template_about";

        $this->load->vars($data);
        $this->load->view('template');
    }


}