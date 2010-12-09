<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
    Checkout - Login
</div>

<p>Silakan pilih opsi checkout yang sesuai.</p>

<div class="middle" style="margin: 10px 20px 0px 10px">
    <div style="margin-bottom: 10px; display: inline-block; width: 100%;">
        <div style="float: left; display: inline-block; width: 49%;">
            <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247); border: 1px solid rgb(221, 221, 221); padding: 10px; min-height: 210px;">
                <h3>Saya pengunjung baru.</h3>
                <form id="account" enctype="multipart/form-data" method="post" action="">
                    <p>Pilihan checkout:</p>
                    <label style="cursor: pointer;" for="register">
                        <input type="radio" value="register" name="account">
                        <b>Daftar sebagai member</b></label>
                    <br>
                    <label style="cursor: pointer;" for="guest">
                        <input type="radio" value="guest" name="account" checked="checked" >
                        <b>Checkout tanpa mendaftar</b></label>
                    <br>
                    <br>
                    <p>Dengan menjadi member, Anda dapat berbelanja lebih cepat, dapat melihat riwayat pembelian, dan dapat melihat tawaran produk khusus dari kami.</p>
                    <br/>
                    <input type="submit" name="options" value="Lanjutkan"/>
                </form>
            </div>
        </div>
        <div style="float: right; display: inline-block; width: 49%;">
            <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247); border: 1px solid rgb(221, 221, 221); padding: 10px; min-height: 210px;">
                <h3>Saya seorang member.</h3>
                <?php echo form_open('akun/login') ?>
                    <p>Silakan login terlebih dahulu.</p>
                    <br>
                    <b>Username:</b><br>
                    <input type="text" name="username">
                    <br>
                    <br>
                    <b>Password:</b><br>
                    <input type="password" name="password">
                    <br>
                    <br/>
                    <input type="submit" name="login_submit" value="Login"/>
                    <input type="hidden" name="aksi" value="langsung_ke_checkout"/>
                </form>
            </div>
        </div>
    </div>
</div>