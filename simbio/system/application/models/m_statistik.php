<?php

class M_statistik extends Model {

    function M_statistik()
    {
        parent::Model();
    }

    function get_pemesanan_per_bulan($tahun = '2010')
    {
        $data = array();
        $q = $this->db->query("SELECT MONTH(`tanggal_pemesanan`) as bulan, COUNT(id_pesanan) as jumlah
                               FROM tb_pesanan
                               WHERE YEAR(`tanggal_pemesanan`) = $tahun
                               GROUP BY MONTH(`tanggal_pemesanan`)
                               ORDER BY MONTH(`tanggal_pemesanan`) ASC");
        
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
