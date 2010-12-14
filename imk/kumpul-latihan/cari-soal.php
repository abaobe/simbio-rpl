<?php
// Set judul halaman yang bakal tampil di titlebar browser
$judul_halaman = "Hasil Pencarian";

// Ambil header...
include '../header.php';

$q = $_GET['q'];
$n = 0;

if($q == 'compile') $n = 3;

?>

<style type="text/css">

    ul.soal {
        list-style: none;
        padding: 0px;
    }

    ul.soal li {
        border-bottom: 1px solid #DDD;
        padding: 0px;
    }

    ul.soal li div {
        margin: 3px 0px 5px 10px;
        font-size: 11px;
        color: #333;
    }

    ul.soal a {
        display: block;
        padding: 5px 10px;
        border: 1px solid #FFF;
    }

    ul.soal a:hover {
        background: url("images/post-bg0.png") repeat-x scroll left bottom #FFFFFF;
        border-color: #DDD;
    }

    span.hilight {
        background-color: #fff9d7;
        border: 1px solid #e2c822;
        color: #333;
        -moz-border-radius: 3px;
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
                                <h2>Hasil Pencarian</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="copy fix">


                    <div class="textcontent">
                        <p>
                            <strong>Menampilkan hasil pencarian untuk: <?php echo $q; ?></strong><br/>
                            Ditemukan <?php echo $n; ?> hasil
                        </p>

                        <?php if($n > 0) : ?>
                        <div class="postwrap">
                            <div class="copy">
                                <ul class="soal">
                                    <li>
                                        <a href="kumpul-latihan/soal1.php"><strong>pjj0101</strong> &raquo; Pemrograman yang pertama</a>
                                        <div>... program tersebut menggunakan program Dev-C++ dan simpan ke dalam file bernama pjj0101.c dan selanjutnya lakukan kompilasi (<span class="hilight">compile</span>). Jika terdapat ...</div>
                                    </li>
                                    <li>
                                        <a href="kumpul-latihan/soal1.php"><strong>pjj0103</strong> &raquo; Program menjumlahkan bilangan bulat</a>
                                        <div>... kedua fungsi ini membutuhkan informasi dan deklarasi yang digunakan oleh <span class="hilight">compile</span>r, dan tersimpan dalam header file, yaitu standard input/output header file (stdio.h). </div>
                                    </li>
                                    <li>
                                        <a href="kumpul-latihan/soal1.php"><strong>pjj0109</strong> &raquo; Jualan bebek</a>
                                        <div>... Output program setelah di-<span class="hilight">compile</span> adalah sebuah bilangan floating point yang menunjukkan besar uang yang diperoleh Pak Algor dari hasil penjualan semua bebek-bebeknya.</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php endif; ?>

                        <br/>
                    </div>
                </div>




            </div>

        </div>

        <div class="clear" style="display: none" id="trash"></div>

    </div>
</div>


<!--sidebar -->
<?php include '../sidebar.php' ?>

<!--footer -->
<?php include '../footer.php'; ?>