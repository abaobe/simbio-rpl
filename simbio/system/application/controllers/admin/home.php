<?php

class Home extends Controller {

    function Home()
    {
        parent::Controller();
        $this->load->model('M_statistik', 'statistik');

        if(!$this->session->userdata('admin_login'))
            redirect('admin/login');
    }


    function index()
    {
        $data = array();

        $data['template_konten'] = "admin/admin_home";

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

}