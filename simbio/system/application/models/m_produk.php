<?php

class M_produk extends Model {

    function M_produk()
    {
        parent::Model();
    }

    function get_produk($id)
    {
        $data = array();
        $q = $this->db->get_where('tb_produk', array('id_produk' => $id));
        if($q->num_rows() > 0)
        {
            $data = $q->row_array();
        }

        $q->free_result();
        return $data;
    }

    function get_semua_produk()
    {
        $data = array();
        
        $this->db->order_by('nama_produk');
        $q = $this->db->get('tb_produk');
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

    function get_produk_terbaru($jumlah = 5)
    {
        $data = array();

        $this->db->limit($jumlah);
        $this->db->order_by('tanggal_update_produk', 'desc');
        $q = $this->db->get('tb_produk');

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
