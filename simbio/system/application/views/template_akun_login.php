<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>
<?php echo $judul_konten ?>
</div>

<div class="middle" style="margin: 10px 20px 0px 10px">
    <div style="margin-bottom: 10px; display: inline-block; width: 100%;">
        <div style="float: left; display: inline-block; width: 49%;">

            <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247); border: 1px solid rgb(221, 221, 221); padding: 10px; min-height: 210px;">
                <h3>Silakan login terlebih dahulu</h3>
                <?php echo form_open('akun/login'); ?>
                    <span class="red"><?php if(isset($error)) echo $error; ?></span>
                    <br/>
                    <br/>
                    <b>Username:</b><br>
                    <input type="text" name="username">
                    <br/>
                    <br/>
                    <b>Password:</b><br/>
                    <input type="password" name="password">
                    <br/>
                    <br/>
                    <input type="submit" name="login_submit" value="Login"/>
                </form>
            </div>


        </div>
        <div style="float: right; display: inline-block; width: 49%;">
            <div style="background: none repeat scroll 0% 0% rgb(247, 247, 247); border: 1px solid rgb(221, 221, 221); padding: 10px; min-height: 210px;">
                <h3>Belum punya akun?</h3>
                    <p>
                        <?php echo anchor("akun/registrasi", "Daftar di sini &raquo;", array('style' => 'font-weight: bold; color:#990000')) ?>
                    </p>
                    <br/>
                    <p>Dengan menjadi member, Anda dapat berbelanja lebih cepat, dapat melihat riwayat pembelian, dan dapat melihat tawaran produk khusus dari kami.</p>
                    <br/>
            </div>


        </div>
    </div>
</div>