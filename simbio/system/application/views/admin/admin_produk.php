<h2>Manajemen Produk SIMBIO</h2>

Berikut ini daftar semua produk yang ada di SIMBIO (terurut nama).
Klik "Edit" untuk mengedit informasi produk maupun menghapusnya.

<br/>
<br/>

<?php echo anchor('admin/produk/tambah', 'Tambahkan produk baru &raquo;') ?>

<table width="100%">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Stok</th>
        <th>Harga asli</th>
        <th>Diskon</th>
        <th>Diupdate</th>
        <th></th>
    </tr>
    <?php $i = 1; foreach ($daftar_produk as $produk) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo anchor("produk/detail/{$produk['id_produk']}/".url_title($produk['nama_produk']), $produk['nama_produk'], array('target' => '_blank')) ?></td>
        <td><?php echo $produk['stok_produk']; ?></td>
        <td style="text-align: right">Rp <?php echo number_format($produk['harga_produk'], 0, ',', '.') ?></td>
        <td style="text-align: right"><?php echo ($produk['diskon'] == 0) ? "-" : $produk['diskon'] . "%"; ?></td>
        <td><?php echo $produk['tanggal_update_produk']; ?></td>
        <td>
            <?php echo anchor('admin/produk/edit/' . $produk['id_produk'], "Edit"); ?>
        </td>
    </tr>
    <?php $i++; endforeach; ?>

</table>

<br/>
<br/>
<br/>
