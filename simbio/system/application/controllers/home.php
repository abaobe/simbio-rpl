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

    function kritik_saran()
    {
        $data = array();
        $data['judul'] = "Kritik dan Saran";
        $data['judul_konten'] = "Kritik dan Saran";
        $data['template_konten'] = "template_krisan";

        $this->load->vars($data);
        $this->load->view('template');


    }

}