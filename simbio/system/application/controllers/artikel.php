<?php

class Artikel extends Controller {

    function Artikel()
    {
        parent::Controller();
    }

    function index()
    {
        $this->load->model('M_artikel');
        $this->load->library('typography');

        $data = array();
        $data['daftar_artikel'] = $this->M_artikel->get_artikel_terbaru(100);
        $data['judul'] = "Artikel Terbaru";
        $data['judul_konten'] = "Artikel Terbaru";
        $data['template_konten'] = 'template_artikel';

        $this->load->vars($data);
        $this->load->view('template');

    }

    function detail($id, $name = '')
    {

        $this->load->model('M_artikel');
        $this->load->library('typography');

        $data = array();
        $data['artikel'] = $this->M_artikel->get_artikel($id);
        $data['judul'] = $data['artikel']['judul_artikel'];
        $data['template_konten'] = 'template_detail_artikel';

        $this->load->vars($data);
        $this->load->view('template');
    }

}