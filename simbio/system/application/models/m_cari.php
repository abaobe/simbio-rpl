<?php

// model yang meng-handle semua pencarian di databes

class M_cari extends Model {

    function M_cari()
    {
        parent::Model();
    }

    function cari_produk($kata_kunci)
    {
        $data = array();

        $this->db->like('nama_produk', $kata_kunci);
//      $this->db->or_like('info_produk', $kata_kunci);
        $this->db->order_by('nama_produk', 'asc');

        $q = $this->db->get('tb_produk');

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $q->free_result();
        
        return $data;
    }

    function cari_artikel($kata_kunci)
    {
        $data = array();

        $this->db->like('judul_artikel', $kata_kunci);
        $this->db->or_like('isi_artikel', $kata_kunci);
        $this->db->order_by('judul_artikel', 'asc');

        $q = $this->db->get('tb_artikel');

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $q->free_result();

        return $data;
    }

}