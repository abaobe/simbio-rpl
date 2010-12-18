<?php

class Login extends Controller {

    function Login()
    {
        parent::Controller();
    }


    function index()
    {
        // jangan login ulang
        if($this->session->userdata('admin_login'))
            redirect('admin/home');

        if($this->input->post('submit'))
        {
            $username = $this->input->post('admin_username');
            $password = $this->input->post('admin_password');

            if($username == $this->config->item('admin_username') && $password == $this->config->item('admin_password'))
            {
                $this->session->set_userdata(array('admin_login' => TRUE));
                redirect('admin/home');
            }
            else
            {
                $data['error'] = "Username atau password salah";
            }

        }

        $data['template_konten'] = 'admin/admin_login';

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

    function out()
    {
        $this->session->unset_userdata('admin_login');

        $data = array();
        $data['template_konten'] = 'admin/admin_logout';

        $this->load->vars($data);
        $this->load->view('admin/template');
    }


}
