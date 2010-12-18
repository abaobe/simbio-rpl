<h2>Edit Produk: <?php echo $produk['nama_produk'] ?></h2>

<?php if ($updated) : ?>
<strong>Data produk berhasil disimpan.</strong>
<?php else : ?>
Isikan form berikut untuk mengedit data produk.
<?php endif; ?>

<?php

$daftar_gambar = directory_map('images/photos', TRUE);
sort($daftar_gambar);

?>

<form action="" method="post">

    <table width="100%">

        <tr>
            <td width="25%">ID produk</td>
            <td><?php echo $produk['id_produk']; ?></td>
        </tr>
        <tr>
            <td>Nama produk</td>
            <td><input type="text" value="<?php echo $produk['nama_produk']; ?>" name="nama_produk" size="30"/></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>
                <textarea name="info_produk" cols="60" rows="10"><?php echo $produk['info_produk']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="text" value="<?php echo $produk['stok_produk']; ?>" name="stok_produk" size="20" maxlength="3"/></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" value="<?php echo $produk['harga_produk']; ?>" name="harga_produk" size="20"/></td>
        </tr>
        <tr>
            <td>Diskon</td>
            <td>
                <select name="diskon">
                    <option value="0">0%</option>
                    <option value="10"<?php if($produk['diskon'] == 10) echo "selected" ?>>10%</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gambar 1 (utama)</td>
            <td>
                <select name="gambar_produk_1" onchange="document.getElementById('gbr1').src = 'images/photos/' + this.value;">
                    <option value="">Pilih:</option>
                    <?php foreach ($daftar_gambar as $gambar) : ?>
                    <option value="<?php echo $gambar; ?>" <?php if($produk['gambar_produk_1'] == $gambar) echo "selected"?>><?php echo $gambar; ?></option>
                    <?php endforeach; ?>
                </select><br/>
                <img id="gbr1" src="images/photos/<?php echo $produk['gambar_produk_1']; ?>" alt="" style="margin-top: 5px"/>
            </td>
        </tr>
        <tr>
            <td>Gambar 2 (opsional)</td>
            <td>
                <select name="gambar_produk_2" onchange="document.getElementById('gbr2').src = 'images/photos/' + this.value;">
                    <option value="">Pilih:</option>
                    <?php foreach ($daftar_gambar as $gambar) : ?>
                    <option value="<?php echo $gambar; ?>" <?php if($produk['gambar_produk_2'] == $gambar) echo "selected"?>><?php echo $gambar; ?></option>
                    <?php endforeach; ?>
                </select><br/>
                <img id="gbr2" src="images/photos/<?php echo $produk['gambar_produk_2']; ?>" alt="" style="margin-top: 5px"/>
            </td>
        </tr>
        <tr>
            <td>Gambar 3 (opsional)</td>
            <td>
                <select name="gambar_produk_3" onchange="document.getElementById('gbr3').src = 'images/photos/' + this.value;">
                    <option value="">Pilih:</option>
                    <?php foreach ($daftar_gambar as $gambar) : ?>
                    <option value="<?php echo $gambar; ?>" <?php if($produk['gambar_produk_3'] == $gambar) echo "selected"?>><?php echo $gambar; ?></option>
                    <?php endforeach; ?>
                </select><br/>
                <img id="gbr3" src="images/photos/<?php echo $produk['gambar_produk_3']; ?>" alt="" style="margin-top: 5px"/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Simpan" style="font-size: 15px"/>
                ... atau <?php echo anchor('admin/produk/hapus/' . $produk['id_produk'], "Hapus produk ini", array('onclick' => "if(!confirm('Yakin menghapus?')) return false;")); ?>
            </td>
        </tr>



    </table>



</form>