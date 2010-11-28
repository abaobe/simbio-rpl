<?php

// Model buat kritik dan saran

class M_krisan extends Model {

    var $jumlah_data_hasil;

    function M_krisan()
    {
        parent::Model();
    }

    function get_entri_publik($mulai = 0, $sebanyak = 10)
    {

        $data = array();

        $this->db->select('id, nama, pesan, tanggal_posting');
        $this->db->where('approved = 1');
        $this->db->limit($sebanyak, $mulai);
        $this->db->order_by('id', 'desc');
        $q = $this->db->get('tb_kritik_saran');

        $n = $this->db->query("SELECT COUNT(*) AS jumlah FROM `tb_kritik_saran` WHERE `approved` = 1");
        $n = $n->row_array();
        $n = $n['jumlah'];

        $this->jumlah_data_hasil = $n;

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

    function tambahkan($data)
    {
        $this->db->insert('tb_kritik_saran', $data);
        return $this->db->insert_id();
    }

}