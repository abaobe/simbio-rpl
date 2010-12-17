<h2>Kritik dan Saran SIMBIO</h2>

Berikut ini daftar semua kritik dan saran di SIMBIO (terurut tanggal pengiriman).

<br/><br/><?php echo $page_links; ?><br/>

<table width="100%">
    <tr>
        <th>ID</th>
        <th>Pengirim</th>
        <th>Alamat</th>
        <th>No kontak</th>
        <th>Email</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php $i = 1; foreach ($daftar_krisan as $krisan) : ?>
    <tr <?php if($i % 2) echo "style='background-color: #EEE;'"; ?>>
        <td rowspan="2"><?php echo $krisan['id']; ?></td>
        <td><?php echo $krisan['nama']; ?> <?php if ($krisan['id_user'] != 0) echo '<strong>(userid : ' . $krisan['id_user'] . ')</strong>'; ?></td>
        <td><?php echo $krisan['alamat']; ?></td>
        <td><?php echo $krisan['no_kontak']; ?></td>
        <td><?php echo $krisan['email']; ?></td>
        <td><?php echo ($krisan['approved']) ? '<span style="color: green">Approved</span>' : '<span style="color: red">Unapproved</span>'; ?></td>
        <td rowspan="2" style="text-align: center" width="15%">
            <?php echo ($krisan['approved']) ? anchor('admin/kritik_saran/unapprove/' . $krisan['id'], "Unapprove") : anchor('admin/kritik_saran/approve/' . $krisan['id'], "Approve"); ?>
            <?php // echo anchor('admin/kritik_saran/balas/' . $krisan['id'], "Balas"); ?>
            <br/><br/>
            <?php echo anchor('admin/kritik_saran/hapus/' . $krisan['id'], form_submit('Hapus', 'Hapus'), array('onclick' => "if(!confirm('Yakin menghapus?')) return false;")); ?>
        </td>
    </tr>
    <tr <?php if($i % 2) echo "style='background-color: #EEE;'"; ?>>
        <td colspan="5">
            <?php echo $krisan['pesan']; ?><br/><br/>
            <em>Pada <strong><?php echo $krisan['tanggal_posting']; ?></strong> dari IP <strong><?php echo $krisan['ip']; ?></strong></em>
        </td>
    </tr>
    <?php $i++; endforeach; ?>
</table>

<?php echo $page_links; ?>

<br/>
<br/>