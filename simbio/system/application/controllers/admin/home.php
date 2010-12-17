<?php

class Home extends Controller {

    function Home()
    {
        parent::Controller();
    }


    function index()
    {
        $data = array();

        $data['template_konten'] = "admin/admin_home";

        $this->load->vars($data);
        $this->load->view('admin/template');
    }


}