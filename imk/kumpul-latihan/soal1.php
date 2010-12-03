<?php
// Set judul halaman yang bakal tampil di titlebar browser
$judul_halaman = "pjj0101 - Pemrograman yang pertama";

// Ambil header...
include '../header.php';
?>

<style type="text/css">

    pre.code {
        border: 1px solid #BBD8FB;
        padding: 3px;
        margin: 5px 0px;
        background-color: #F3F7FD;
    }

</style>

<script type="text/javascript">

// smooth scrolling

$(function(){

    $('a[href*=#]').click(function() {

    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {

            var $target = $(this.hash);

            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

            if ($target.length) {

                var targetOffset = $target.offset().top;

                $('html,body').animate({scrollTop: targetOffset}, 700);

                window.location.hash = this.hash.slice(1);

                return false;

            }

        }

    });

});

</script>

<div id="maincontent">
    <div id="content">

        <div class="postwrap fix">

            <div class="post type-post hentry category-uncategorized" id="post-36">

                <div class="copy fix">


                    <div class="post-header fix post-nothumb">
                        <div class="post-title-section fix">
                            <div class="post-title fix">
                                <h2>pjj0101 <span style="color: #888; font-size: 20px">&raquo; Pemrograman yang pertama</span></h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="copy fix">


                    <div class="textcontent">
                        <table>
                            <tr>
                                <td width="100">Pembuat soal </td>
                                <td>: Julio Adisantoso</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>: Sudah mengumpulkan</td>
                            </tr>
                            <tr>
                                <td>Nilai</td>
                                <td>: 100</td>
                            </tr>
                        </table>
                        <br/>
                        <p style="color: #888">
                            Langsung ke : <a href="kumpul-latihan/soal1.php#teori">Penjelasan teori</a> &middot; <a href="kumpul-latihan/soal1.php#soal">Soal</a> &middot; <a href="kumpul-latihan/soal1.php#form">Form upload</a>
                        </p>

                        <div class="postwrap" id="teori">
                            <div class="copy"><h5>Penjelasan teori</h5></div>
                            <div class="copy">
                                <p>Sebelum memulai belajar pemrograman menggunakan sistem ini, sebaiknya kita mulai dengan mengenal bagaimana sistem ini bekerja. Pada masa sebelumnya kita biasanya memeriksa jawaban pemrograman mahasiswa secara manual. Program setiap mahasiswa dijalankan untuk setiap <i>test case</i> (data yang diberikan sebagai input dan sudah diketahui outputnya), lalu keluarannya dicek kebenarannya (sesuai dengan output yang telah diketahui).  Hal ini sangat memakan waktu dan tidak efisien, sehingga digunakan sistem <i>online judge</i> untuk mengotomatisasi proses tersebut.</p>
                                <p>Setiap soal yang akan diberikan memiliki <i>header</i> seperti di atas. Selain untuk memberi instruksi pada mahasiswa, header tersebut juga berfungsi untuk memberi instruksi pada <i>online judge</i> yang akan memeriksa program.  Misalnya, sesuai contoh di atas, program harus diberi nama <b>pjj0101.c</b> agar dapat dikenali oleh sistem. Setelah itu, program akan diberi <i>test case</i> atau <i>data input</i> yang sudah disiapkan oleh dosen.  Input ini akan berbeda dari contoh masukan pada deskripsi soal, dan ada cukup banyak masukan (biasanya 5 atau lebih).  Untuk setiap <i>test case</i>, program dijalankan dan waktunya diukur.  Jika program berjalan terlalu lama maka program akan dihentikan secara paksa dan tidak mendapat skor untuk <i>test case</i> tersebut.  Jika program berhenti dan  mengeluarkan keluaran yang sesuai dengan keluaran yang sudah dibuat oleh dosen, program mendapat skor, dan jika tidak sesuai maka program tidak mendapat skor (atau bernilai nol). Skor total untuk sebuah program adalah jumlah dari semua skor-skor yang diperoleh untuk semua <i>test case</i>. </p>

                                <p>Karena yang melakukan pengecekan keluaran adalah komputer, maka kesalahan format sedikit pun tidak akan ditoleransi. Komputer akan menganggap berbeda keempat keluaran ini:
                                </p>
                                <pre class="code">3</pre>
                                <pre class="code"> 3</pre>
                                <pre class="code">3
 </pre>
                                <pre class="code">3&nbsp;</pre>
                                <p>

                                    Catatan:<br />
                                    Keluaran kedua kelebihan sebuah spasi di awal.<br />
                                    Keluaran ketiga kelebihan sebuah baris kosong.<br />
                                    Keluaran keempat kelebihan sebuah spasi di akhir baris.
                                </p>
                                <p>Oleh karena itu, format keluaran harus persis sesuai yang diminta
                                    pada soal, tanpa ada kelebihan spasi di awal baris, di akhir baris,
                                    dan tanpa ada baris kosong yang berlebih.</p>
                            </div>
                        </div>
                        <br/>
                        <div class="postwrap" id="soal">
                            <div class="copy"><h5>Soal</h5></div>
                            <div class="copy">
                                <p>Program berikut adalah program sederhana untuk mencetak satu baris teks
                                    <strong>Selamat datang dalam pemrograman C!</strong> ke layar komputer.
                                    Perhatikan bahwa program C selalu memiliki minimal sebuah fungsi bernama main().
                                    Dari fungsi inilah program C pertama kali diproses.</p>
                                <pre class="code">

/* Pemrograman yang pertama */
main()
{
   printf("Selamat datang dalam pemrograman C!\n");
}
                                </pre>
                                <p>Baris pertama program tersebut berupa komentar yang diapit oleh tanda /* dan */.
                                    Setiap teks yang dituliskan di antara tanda tersebut tidak akan diproses oleh komputer.
                                    Teks tersebut hanyalah untuk memberi keterangan atau penjelasan tentang program yang ditulis.</p>
                                <p>Program pertama ini hanya terdiri dari satu baris instruksi, yaitu <strong>printf</strong> yang
                                    digunakan untuk mencetak ke layar komputer. Yang dicetak adalah teks <strong>Selamat datang dalam pemrograman C!</strong>. Dalam bahasa C, teks atau string diapit oleh tanda ". Di dalam teks yang dicetak, terdapat notasi tanda miring terbalik (backslash), yang disebut dengan <i>escape character</i> yang memiliki makna tertentu. Dalam program tersebut, escape character yang digunakan adalah \n yang artinya <strong>new line</strong>, yang menyebabkan kursor akan berpindah ke baris berikutnya.</p>
                                <p>Ketik program tersebut menggunakan program Dev-C++ dan simpan ke dalam file bernama <b>pjj0101.c</b> dan selanjutnya
                                    lakukan kompilasi (compile). Jika terdapat pesan kesalahan, lakukan perbaikan dan ulangi proses compile sampai tidak terdapat pesan kesalahan maupun peringatan (warning). Untuk menjalankan program yang sudah benar dan sudah di-compile, aktifkan mode DOS melalui perintah start | run | (ketik) cmd | (enter). Masuklah ke folder dimana program tersimpan, dan jalankan program dengan mengetikkan perintah <strong>pjj0101</strong> diikuti dengan enter. Perhatikan output yang dihasilkan. Berikut adalah contoh menjalankan program seperti yang dijelaskan
                                    sebelumnya.<br /><br />

                                    <img src="images/cmd00000.jpg" border="0" alt=""><br /><br />
                                </p>

                            </div>
                        </div>

                        <br/>
                        <div class="postwrap" id="form">
                            <div class="copy"><h5>Form upload</h5></div>
                            <div class="copy">
                                <div style="background-color: #fff9d7; border: 1px solid #e2c822; color: #333333; padding: 10px;">
                                    Anda sudah pernah mengupload latihan ini. Mengupload ulang latihan akan menyebabkan latihan yang lama ditimpa dengan yang baru.
                                </div>
                                <br/>
                                <table>
                                    <tr>
                                        <td width="150">Nama file yang diminta </td>
                                        <td>: <pre style="display: inline; font-weight: bold">pjj0101.c</pre></td>
                                    </tr>
                                    <tr>
                                        <td>File</td>
                                        <td style="padding: 6px 0px">: <input type="file" size="30" /></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>&nbsp;&nbsp;<input type="submit" class="button" value="Upload"/></td>
                                    </tr>
                                </table>

                                <br/>
                                <br/>
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