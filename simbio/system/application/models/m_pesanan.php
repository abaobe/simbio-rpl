<?php

class M_pesanan extends Model {

    function M_pesanan()
    {
        parent::Model();
    }

    function get_pesanan($user_id)
    {
        $data = array();

        $this->db->where('id_user', $user_id);
        $this->db->order_by('tanggal_pemesanan', 'asc');
        $q = $this->db->get('tb_pesanan');

        if ($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;

    }


    function get_detail_pesanan($id_pesanan)
    {
        $data = array();

        $this->db->where('id_pesanan', $id_pesanan);
        $q = $this->db->get('tb_produk_pesanan');

        if ($q->num_rows() > 0)
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