<h2>Tambah Artikel</h2>

<?php if ($updated) : ?>
<strong>Artikel baru berhasil dibuat.</strong>
<?php else : ?>
Isikan form berikut untuk mengedit artikel.
<?php endif; ?>

<form action="" method="post">

    <table width="100%">

        <tr>
            <td width="25%">ID artikel</td>
            <td><?php echo $artikel['id_artikel'] ?></td>
        </tr>
        <tr>
            <td width="25%">Judul artikel</td>
            <td><input type="text" name="judul_artikel" size="30" value="<?php echo $artikel['judul_artikel'] ?>"/></td>
        </tr>
        <tr>
            <td>Isi artikel</td>
            <td>
                <textarea name="isi_artikel" cols="60" rows="30"><?php echo $artikel['isi_artikel'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Simpan" style="font-size: 15px"/>
                ... atau <?php echo anchor('admin/artikel/hapus/' . $artikel['id_artikel'], "Hapus artikel ini", array('onclick' => "if(!confirm('Yakin menghapus?')) return false;")); ?>                
            </td>
        </tr>



    </table>

</form>
