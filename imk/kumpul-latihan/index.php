<?php
// Set judul halaman yang bakal tampil di titlebar browser
$judul_halaman = "Latihan";

// Ambil header...
include '../header.php';
?>

<style type="text/css">

    ul.soal {
        list-style: none;
        padding: 0px;
    }

    ul.soal li {
        border-top: 1px solid #DDD;
        padding: 0px;
    }

    ul.soal a {
        display: block;
        padding: 5px 10px;
        border: 1px solid #FFF;
    }

    ul.soal a:hover {
        background: url("images/post-bg0.png") repeat-x scroll left bottom #FFFFFF;
        border-color: #DDD;
        text-decoration: none;
    }

</style>

<div id="maincontent">
    <div id="content">

        <div class="postwrap fix">

            <div class="post type-post hentry category-uncategorized" id="post-36">

                <div class="copy fix">


                    <div class="post-header fix post-nothumb">
                        <div class="post-title-section fix">
                            <div class="post-title fix">
                                <h2>Latihan pemrograman</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="copy fix">


                    <div class="textcontent">
                        <p>
                            Berikut ini daftar latihan pemrograman yang tersedia. Klik pada masing-masing judul untuk membukanya.
                        </p>

                        <br/>
                        <div class="postwrap">
                            <div class="copy"><h4>Chapter 1</h4></div>
                            <div class="copy">
                                <ul class="soal">
                                    <li><a href="kumpul-latihan/soal1.php"><strong>pjj0101</strong> &raquo; Pemrograman yang pertama</a></li>
                                    <li><a href="kumpul-latihan/soal1.php"><strong>pjj0102</strong> &raquo; Fungsi printf</a></li>
                                    <li><a href="kumpul-latihan/soal1.php"><strong>pjj0103</strong> &raquo; Program menjumlahkan bilangan bulat</a></li>
                                    <li><a href="kumpul-latihan/soal1.php"><strong>pjj0104</strong> &raquo; Aritmatika dalam C</a></li>
                                    <li><a href="kumpul-latihan/soal1.php"><strong>pjj0105</strong> &raquo; Tipe data dalam C</a></li>
                                    <li><a href="kumpul-latihan/soal1.php"><strong>pjj0106</strong> &raquo; Literal constant and assignment operator</a></li>
                                    <li><a href="kumpul-latihan/soal1.php"><strong>pjj0107</strong> &raquo; Menghitung nilai pajak</a></li>
                                    <li><a href="kumpul-latihan/soal1.php"><strong>pjj0108</strong> &raquo; Menghitung detik</a></li>
                                    <li><a href="kumpul-latihan/soal1.php"><strong>pjj0109</strong> &raquo; Jualan bebek</a></li>
                                    <li><a href="kumpul-latihan/soal1.php"><strong>pjj0110</strong> &raquo; Memisahkan bilangan pecahan</a></li>
                                </ul>
                            </div>
                                <div class="hl"></div>
                                    <div class="post-footer">
                                        <div class="left">
                                            <a href="kumpul-latihan/upload-ch1.php" style="text-decoration: underline">Klik di sini</a>
                                            untuk mengupload beberapa atau semua latihan Chapter 1 sekaligus.
                                        </div>
                                        <br class="fix">
                                    </div>
                                
                        </div>

                        <br/>
                        <div class="postwrap">
                            <div class="copy"><h4>Chapter 2</h4></div>
                            <div class="copy">
                                <p>Anda harus menyelesaikan seluruh latihan pada Chapter 1 sebelum melanjutkan ke Chapter 2.</p>
                            </div>
                        </div>

                        <br/>
                    </div>
                </div>




            </div>

        </div>

        <div class="clear"></div>

    </div>
</div>


<!--sidebar -->
<?php include '../sidebar.php' ?>

<!--footer -->
<?php include '../footer.php'; ?>

