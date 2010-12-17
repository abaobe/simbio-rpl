<h2>Edit User</h2>

<?php if ($updated) : ?>
<strong>Data user berhasil diperbarui.</strong>
<?php else : ?>
Isikan form berikut untuk mengedit data user.
<?php endif; ?>


<form action="" method="post">

    <table width="100%">

        <tr>
            <td width="25%">ID user</td>
            <td><?php echo $user['id_user']; ?></td>
        </tr>
        <tr>
            <td width="25%">Username</td>
            <td><input type="text" value="<?php echo $user['username'] ?>" name="username" size="30"/></td>
        </tr>
        <tr>
            <td width="25%">Password</td>
            <td><input type="text" value="" name="password" size="30"/> (kosongkan bila tidak ingin diubah)</td>
        </tr>
        <tr>
            <td width="25%">Nama lengkap</td>
            <td><input type="text" value="<?php echo $user['nama_lengkap'] ?>" name="nama_lengkap" size="30"/></td>
        </tr>
        <tr>
            <td width="25%">Alamat</td>
            <td><input type="text" value="<?php echo $user['alamat'] ?>" name="alamat" size="70"/></td>
        </tr>
        <tr>
            <td width="25%">Kode pos</td>
            <td><input type="text" value="<?php echo $user['kode_pos'] ?>" name="kode_pos" size="30"/></td>
        </tr>
        <tr>
            <td width="25%">No. Telepon</td>
            <td><input type="text" value="<?php echo $user['no_telepon'] ?>" name="no_telepon" size="30"/></td>
        </tr>
        <tr>
            <td width="25%">No. KTP</td>
            <td><input type="text" value="<?php echo $user['no_ktp'] ?>" name="no_ktp" size="30"/></td>
        </tr>
        <tr>
            <td width="25%">Email</td>
            <td><input type="text" value="<?php echo $user['email'] ?>" name="email" size="30"/></td>
        </tr>
        <tr>
            <td width="25%">Aktif?</td>
            <td>
                <select name="aktif">
                    <option value="1" <?php if($user['aktif'] == 1) echo "selected" ?>>Ya</option>
                    <option value="0" <?php if($user['aktif'] == 0) echo "selected" ?>>Tidak</option>
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Simpan" style="font-size: 15px"/>
                ... atau <?php echo anchor('admin/user/hapus/' . $user['id_user'], "Hapus user ini", array('onclick' => "if(!confirm('Yakin menghapus?')) return false;")); ?>
            </td>
        </tr>



    </table>

</form>
