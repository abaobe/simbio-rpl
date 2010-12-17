<h2>Manajemen Pesanan SIMBIO</h2>

Berikut ini daftar pesanan yang pernah dipesan (terurut tanggal pemesanan).
Klik detail untuk melihat detail pesanan.

<br/><br/><?php echo $page_links; ?><br/>

<table width="100%">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Data pengiriman</th>
        <th>Metode pembayaran</th>
        <th>Total biaya</th>
        <th>Tanggal pemesanan</th>
        <th>Status pengiriman</th>
        <th>Aksi</th>
    </tr>
    <?php $i = 1; foreach ($daftar_pesanan as $pesanan) : ?>
    <tr <?php if($i % 2) echo "style='background-color: #EEE;'"; ?>>
        <td><?php echo $pesanan['id_pesanan']; ?></td>
        <td>
            <?php echo $pesanan['nama_pemesan']; ?><br/>
            <?php if ($pesanan['id_user'] != 0) echo " <b>(userid : " . $pesanan['id_user'] . ")</b>" ; ?>
        </td>
        <td>
            Alamat: <?php echo $pesanan['alamat']; ?><br/>
            Kode pos: <?php echo $pesanan['kode_pos']; ?><br/>
            No. Telepon: <?php echo $pesanan['no_telepon']; ?><br/>
            No. KTP: <?php echo $pesanan['no_ktp']; ?><br/>
            Email: <?php echo $pesanan['email']; ?><br/>
        </td>
        <td><?php echo $pesanan['metode_pembayaran']; ?></td>
        <td style="text-align: right" width="13%">Rp <?php echo number_format($pesanan['total_biaya'], 0, ',', '.') ?></td>
        <td>
            <?php echo $pesanan['tanggal_pemesanan']; ?><br/>
            dari IP <?php echo $pesanan['alamat_ip']; ?>
        </td>
        <td>
            <?php echo ($pesanan['status_pengiriman'] == 1) ? '<span style="color: green">Sudah dikirim</span>' : '<span style="color: red">Belum dikirim</span>'; ?>
            <br/><br/>
        </td>
        <td>
            <?php echo ($pesanan['status_pengiriman'] == 1) ? anchor('admin/pesanan/belum_dikirim/' . $pesanan['id_pesanan'], "Tandai belum dikirim") : anchor('admin/pesanan/sudah_dikirim/' . $pesanan['id_pesanan'], "Tandai sudah dikirim"); ?>
            <br/><br>
            <?php echo anchor_popup('admin/pesanan/detail/' . $pesanan['id_pesanan'], "Lihat detail", array('width' => '620', 'height' => '480', 'status' => 'no')); ?>
            <br/><br>
            <?php echo anchor('admin/pesanan/hapus/' . $pesanan['id_pesanan'], form_submit('Hapus', 'Hapus'), array('onclick' => "if(!confirm('Yakin menghapus?')) return false;")); ?>            
        </td>
    </tr>
    <?php $i++; endforeach; ?>
</table>

<?php echo $page_links; ?>

<br/>
<br/>