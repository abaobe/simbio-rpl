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
        $this->db->from('tb_kritik_saran');
        $this->db->where('approved = 1');

        $this->jumlah_data_hasil = $this->db->count_all_results();

        $this->db->limit($sebanyak, $mulai);
        $this->db->order_by('id', 'desc');

        $q = $this->db->get('tb_kritik_saran');

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