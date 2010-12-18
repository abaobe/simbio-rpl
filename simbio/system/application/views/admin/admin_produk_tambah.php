<h2>Tambah Produk</h2>

Isikan form berikut untuk menambahkan data produk baru.

<?php

$daftar_gambar = directory_map('images/photos', TRUE);
sort($daftar_gambar);

?>

<form action="" method="post">

    <table width="100%">

        <tr>
            <td width="25%">Nama produk</td>
            <td><input type="text" value="" name="nama_produk" size="30"/></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>
                <textarea name="info_produk" cols="60" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="text" value="" name="stok_produk" size="20" maxlength="3"/></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" value="" name="harga_produk" size="20"/></td>
        </tr>
        <tr>
            <td>Diskon</td>
            <td>
                <select name="diskon">
                    <option value="0">0%</option>
                    <option value="10">10%</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gambar 1 (utama)</td>
            <td>
                <select name="gambar_produk_1" onchange="document.getElementById('gbr1').src = 'images/photos/' + this.value;">
                    <option value="" selected="selected">Pilih:</option>
                    <?php foreach ($daftar_gambar as $gambar) : ?>
                    <option value="<?php echo $gambar; ?>"><?php echo $gambar; ?></option>
                    <?php endforeach; ?>
                </select><br/>
                <img id="gbr1" src="" alt="" style="margin-top: 5px"/>
            </td>
        </tr>
        <tr>
            <td>Gambar 2 (opsional)</td>
            <td>
                <select name="gambar_produk_2" onchange="document.getElementById('gbr2').src = 'images/photos/' + this.value;">
                    <option value="" selected="selected">Pilih:</option>
                    <?php foreach ($daftar_gambar as $gambar) : ?>
                    <option value="<?php echo $gambar; ?>"><?php echo $gambar; ?></option>
                    <?php endforeach; ?>
                </select><br/>
                <img id="gbr2" src="" alt="" style="margin-top: 5px"/>
            </td>
        </tr>
        <tr>
            <td>Gambar 3 (opsional)</td>
            <td>
                <select name="gambar_produk_3" onchange="document.getElementById('gbr3').src = 'images/photos/' + this.value;">
                    <option value="" selected="selected">Pilih:</option>
                    <?php foreach ($daftar_gambar as $gambar) : ?>
                    <option value="<?php echo $gambar; ?>"><?php echo $gambar; ?></option>
                    <?php endforeach; ?>
                </select><br/>
                <img id="gbr3" src="" alt="" style="margin-top: 5px"/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Simpan" style="font-size: 15px"/>
            </td>
        </tr>



    </table>

</form>
