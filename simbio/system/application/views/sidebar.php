<div class="cart">
    <div class="title"><span class="title_icon"><img src="images/cart2.jpg" alt="" title="" /></span>Keranjang</div>
    <div>
        <?php echo $this->cart->total_items(); ?> item

        <ul>
        <?php foreach ($this->cart->contents() as $items): ?>
            <li>
                <?php echo $items['qty']; ?> x
                <?php echo anchor("produk/detail/{$items['id']}/".url_title($items['name']), $items['name']) ?>
            </li>
        <?php endforeach; ?>
        </ul>
        
        <span class="red">TOTAL: Rp <?php echo ($this->cart->total()) ? $this->cart->format_number($this->cart->total()) : "0"; ?></span>
        <br/>
        <span class="red"><strong><?php echo anchor('keranjang_belanja', 'Lihat belanjaan &raquo;') ?></strong></span>
    </div>

</div>

<div class="right_box">

    <div class="title"><span class="title_icon"><img src="images/promosi.jpg" alt="" title="" /></span>Promosi</div>
    <div class="new_prod_box">
        <a href="details.html">nama produk</a>
        <div class="new_prod_bg">
            <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
            <a href="details.html"><img src="images/thumb1.gif" alt="" title="" class="thumb" border="0" /></a>
        </div>
    </div>

    <div class="new_prod_box">
        <a href="details.html">nama produk</a>
        <div class="new_prod_bg">
            <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
            <a href="details.html"><img src="images/thumb2.gif" alt="" title="" class="thumb" border="0" /></a>
        </div>
    </div>

    <div class="new_prod_box">
        <a href="details.html">nama produk</a>
        <div class="new_prod_bg">
            <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
            <a href="details.html"><img src="images/thumb3.gif" alt="" title="" class="thumb" border="0" /></a>
        </div>
    </div>

</div>


