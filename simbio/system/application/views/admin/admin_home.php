<h2>Panel Administrasi SIMBIO</h2>

Silakan pilih menu di samping.

<br/>
<br/>

<strong>Jumlah data</strong>

<table width="100%">
    <tr>
        <td width="30%">Jumlah produk</td>
        <td><?php echo $this->db->count_all('tb_produk'); ?> produk</td>
    </tr>
    <tr>
        <td width="30%">Jumlah artikel</td>
        <td><?php echo $this->db->count_all('tb_artikel'); ?> artikel</td>
    </tr>
    <tr>
        <td width="30%">Jumlah user</td>
        <td><?php echo $this->db->count_all('tb_user'); ?> user</td>
    </tr>
    <tr>
        <td width="30%">Jumlah kritik & saran</td>
        <td><?php echo $this->db->count_all('tb_kritik_saran'); ?> pesan</td>
    </tr>
    <tr>
        <td width="30%">Jumlah pesanan</td>
        <td><?php echo $this->db->count_all('tb_pesanan'); ?> pesanan</td>
    </tr>
</table>

<br/>

<strong>Statistik pemesanan</strong>

<table width="100%">

    <?php

    $daftar_pemesanan = $this->statistik->get_pemesanan_per_bulan('2010');
    $bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

    foreach ($daftar_pemesanan as $stat)
    {
        echo "<tr>";
        echo "<td width='30%'>";
        echo "Bulan " . $bulan[$stat['bulan']] . " : </td><td>";
        echo "<strong>" . $stat['jumlah'] . " pemesanan</strong>";
        echo "</td>";
        echo "</tr>";
    }

    ?>

</table>


<br/>
