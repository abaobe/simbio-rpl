<h2>Manajemen User SIMBIO</h2>

Berikut ini daftar semua user yang terdaftar di SIMBIO (terurut username).
Klik "Edit" untuk  mengedit informasi user, maupun menghapusnya.

<br/>
<br/>

<?php echo anchor('admin/user/tambah', 'Tambahkan user baru &raquo;') ?>

<table width="100%">
    <tr>
        <th>No.</th>
        <th>Username</th>
        <th>Nama lengkap</th>
        <th>Alamat</th>
        <th>No. Telepon</th>
        <th>No. KTP</th>
        <th>E-mail</th>
        <th>Aktif?</th>
        <th>Tanggal registrasi</th>
        <th></th>
    </tr>
    <?php $i = 1; foreach ($daftar_user as $user) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $user['username']; ?></td>
        <td><?php echo $user['nama_lengkap']; ?></td>
        <td><?php echo $user['alamat']; ?></td>
        <td><?php echo $user['no_telepon']; ?></td>
        <td><?php echo $user['no_ktp']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><?php echo ($user['aktif']) ? '<span style="color:green">Ya</span>' : '<span style="color: red">Tidak</span>'; ?></td>
        <td><?php echo $user['tanggal_registrasi']; ?></td>
        <td>
            <?php echo anchor('admin/user/edit/' . $user['id_user'], "Edit"); ?>
        </td>
    </tr>
    <?php $i++; endforeach; ?>

</table>

<br/>
<br/>
<br/>
