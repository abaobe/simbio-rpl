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

    function get_produk_terlaris($limit = 3)
    {
        $data = array();
        $q = $this->db->query("SELECT p.id_produk, p.nama_produk, p.gambar_produk_1, COUNT(pp.id_produk) AS jumlah_pembelian
                               FROM tb_produk_pesanan AS pp, tb_produk AS p
                               WHERE p.id_produk = pp.id_produk
                               GROUP BY pp.id_produk
                               ORDER BY jumlah_pembelian DESC
                               LIMIT $limit");
        
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
