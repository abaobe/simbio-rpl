<?php

class Upload_gambar extends Controller {

    function Upload_gambar()
    {
        parent::Controller();
        $this->load->helper('directory');

        if(!$this->session->userdata('admin_login'))
            redirect('admin/login');
    }


    function index()
    {
        $data = array();

        $data['template_konten'] = "admin/admin_upload";

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

    function upload()
    {
        // if uploaded
        if($this->input->post('upload'))
        {
          /* Create the config for upload library */
          /* (pretty self-explanatory) */
          $config['upload_path'] = './images/photos/'; /* NB! create this dir! */
          $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
          $config['max_size']  = '500';
          $config['max_width']  = '0';
          $config['max_height']  = '0';
          /* Load the upload library */
          $this->load->library('upload', $config);

            /* Handle the file upload */
            $upload = $this->upload->do_upload('file_gambar');
            /* File failed to upload - continue */
            if($upload === FALSE)
                redirect('admin/upload_gambar/gagal');
            else
                redirect('admin/upload_gambar/ok');
          
        }

    }

    function gagal()
    {
        $data = array();

        $data['template_konten'] = "admin/admin_upload_gagal";

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

    function ok()
    {
        $data = array();

        $data['template_konten'] = "admin/admin_upload_ok";

        $this->load->vars($data);
        $this->load->view('admin/template');
    }

    function hapus($nama_file)
    {
        $del = unlink('images/photos/'. $nama_file);

        if($del)
        {
            $data = array();

            $data['template_konten'] = "admin/admin_upload_deleted";

            $this->load->vars($data);
            $this->load->view('admin/template');
        } else die("GAGAL");
    }

}