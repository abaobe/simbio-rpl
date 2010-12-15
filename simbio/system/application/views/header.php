<div class="logo"><a href="index.php"><img src="" alt="" title="" border="0" /></a>
    <?php $this->load->view('form_pencarian'); ?>
</div>
<div id="menu">
    <ul>
        <li><a href="index.php" class="<?php echo ($this->uri->segment(1) == FALSE || $this->uri->segment(1) == 'home') ? "btn btn_hover" : "btn"?>">Home</a></li>
        <li><a href="index.php/produk" class="<?php echo ($this->uri->segment(1) == 'produk') ? "btn btn_hover" : "btn"?>">Produk</a></li>
        <li><a href="index.php/keranjang_belanja" class="<?php echo ($this->uri->segment(1) == 'keranjang_belanja' || $this->uri->segment(1) == 'checkout') ? "btn btn_hover" : "btn"?>">Keranjang Belanja</a></li>
        <li><a href="index.php/akun" class="<?php echo ($this->uri->segment(1) == 'akun') ? "btn btn_hover" : "btn"?>">Akun</a></li>
        <li><a href="index.php/artikel" class="<?php echo ($this->uri->segment(1) == 'artikel') ? "btn btn_hover" : "btn"?>">Artikel</a></li>
        <li><a href="index.php/kritik_saran" class="<?php echo ($this->uri->segment(1) == 'kritik_saran') ? "btn btn_hover" : "btn"?>">Kritik & Saran</a></li>
        <li><a href="index.php/tentang_kami" class="<?php echo ($this->uri->segment(1) == 'tentang_kami') ? "btn btn_hover" : "btn"?>">Tentang kami</a></li>
    </ul>
</div>
