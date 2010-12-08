<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
    Akun saya
</div>

<p>
    Selamat datang. Berikut ini profil Anda:
</p>

<table width="100%" style="margin-left: 20px;">
    <tr>
        <td>Nama Lengkap</td>
        <td>: <?php echo $this->session->userdata('nama_lengkap') ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>: <?php echo $this->session->userdata('alamat') ?></td>
    </tr>
    <tr>
        <td>No. KTP</td>
        <td>: <?php echo $this->session->userdata('no_ktp') ?></td>
    </tr>
    <tr>
        <td>No. Telepon</td>
        <td>: <?php echo $this->session->userdata('no_telepon') ?></td>
    </tr>
    <tr>
        <td>E-mail</td>
        <td>: <?php echo $this->session->userdata('email') ?></td>
    </tr>
    <tr>
        <td>Kode Pos</td>
        <td>: <?php echo $this->session->userdata('kode_pos') ?></td>
    </tr>
</table>

<p>Untuk mengedit profil Anda, <?php echo anchor('akun/edit_profil', 'klik di sini'); ?></p>
<p>Untuk mengubah password Anda, <?php echo anchor('akun/ubah_password', 'klik di sini'); ?></p>

<br/>

<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
    Riwayat pesanan saya
</div>

<table class="cart_table">

    <tr class="cart_title">
        <th>No.</th>
        <th>ID pesanan</th>
        <th>Tanggal</th>
        <th>Pembayaran</th>
        <th>Biaya total</th>
        <th>Status pengiriman</th>
    </tr>
    <?php $i = 1; foreach ($daftar_pesanan as $pesanan) : ?>
    <tr>
        <td><?php echo $i ?></td>
        <td>
            <?php echo $pesanan['id_pesanan'] ?><br/>
            <?php echo anchor('akun/detail_pesanan/'.$pesanan['id_pesanan'], "Lihat detail") ?>
        </td>
        <td><?php echo $pesanan['tanggal_pemesanan'] ?></td>
        <td><?php echo $pesanan['metode_pembayaran'] ?></td>
        <td>Rp.<?php echo $this->cart->format_number($pesanan['total_biaya']) ?></td>
        <td><?php echo ($pesanan['status_pengiriman']) ? "Sudah dikirim" : "Belum dikirim" ?></td>
    </tr>
    <?php $i++; endforeach; ?>
</table>

<br/>

<p><?php echo anchor('akun/logout', '&laquo; Logout'); ?></p>