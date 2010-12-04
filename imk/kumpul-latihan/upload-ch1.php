<?php
// Set judul halaman yang bakal tampil di titlebar browser
$judul_halaman = "pjj0101 - Pemrograman yang pertama";

// Ambil header...
include '../header.php';
?>


<div id="maincontent">
    <div id="content">

        <div class="postwrap fix">

            <div class="post type-post hentry category-uncategorized" id="post-36">

                <div class="copy fix">


                    <div class="post-header fix post-nothumb">
                        <div class="post-title-section fix">
                            <div class="post-title fix">
                                <h2>Upload Chapter 1</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="copy fix">


                    <div class="textcontent">
                        <p>
                            Anda dapat mengupload beberapa atau semua latihan pada Chapter 1 pada form di bawah ini. <br/>
                            <strong>Catatan: </strong> nama file harus persis sama dengan yang diminta.
                        </p>

                        <br/>
                        <div class="postwrap" id="form">
                            <div class="copy">
                                <table width="100%">
                                <?php for($i = 1; $i <= 10; $i++) : ?>                                
                                    <tr style="background-color: <?php echo $i%2 ? '#EEE' : '#FFF' ?>;">
                                        <td width="150"><code style="font-weight: bold">&nbsp;pjj01<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.c</code></td>
                                        <td style="padding: 6px 0px">: 
                                            <input type="file" size="30" id="pjj010<?php echo $i ?>"/>
                                        </td>
                                    </tr>
                                <?php endfor; ?>
                                </table>
                                <hr/>
                                <form action="kumpul-latihan/upload-ch1-2.php">
                                <table>
                                    <tr>
                                        <td width="150" style="color: #888">Klik untuk mengupload &raquo;</td>
                                        <td>&nbsp;&nbsp;<input id="upload_button" type="submit" class="button" value="Upload"/></td>
                                    </tr>
                                </table>
                                </form>
                                <br/>
                                <br/>
                            </div>
                        </div>

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