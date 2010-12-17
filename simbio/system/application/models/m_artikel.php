<?php

class M_artikel extends Model {

    function M_artikel()
    {
        parent::Model();
    }

    function get_artikel($id)
    {
        $data = array();
        $q = $this->db->get_where('tb_artikel', array('id_artikel' => $id));
        if($q->num_rows() > 0)
        {
            $data = $q->row_array();
        }

        $q->free_result();
        return $data;
    }

    // kalo ini judulnya doang
    function get_daftar_artikel_terbaru($jumlah = 5)
    {
        $data = array();

        $this->db->select('id_artikel');
        $this->db->select('judul_artikel');
        $this->db->limit($jumlah);
        $this->db->order_by('tanggal_posting', 'desc');
        $q = $this->db->get('tb_artikel');

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
              $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    // kalo ini sama isinya juga
    function get_artikel_terbaru($jumlah = 5)
    {
        $data = array();

        $this->db->limit($jumlah);
        $this->db->order_by('tanggal_posting', 'desc');
        $q = $this->db->get('tb_artikel');

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
              $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    // kalo ini SEMUA artikel
    function get_semua_artikel()
    {
        $data = array();

        $this->db->select('id_artikel');
        $this->db->select('judul_artikel');
        $this->db->select('tanggal_posting');
        $this->db->order_by('tanggal_posting', 'desc');
        $q = $this->db->get('tb_artikel');

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
              $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

}