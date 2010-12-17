<h2>Tambah Produk</h2>

Isikan form berikut untuk menambahkan data produk baru.

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
                <input type="text" value="" name="gambar_produk_1" size="30"/>
            </td>
        </tr>
        <tr>
            <td>Gambar 2 (opsional)</td>
            <td>
                <input type="text" value="" name="gambar_produk_2" size="30"/>
            </td>
        </tr>
        <tr>
            <td>Gambar 3 (opsional)</td>
            <td>
                <input type="text" value="" name="gambar_produk_3" size="30"/>
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
