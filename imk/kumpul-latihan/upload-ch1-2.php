<?php
// Set judul halaman yang bakal tampil di titlebar browser
$judul_halaman = "Upload Chapter 1";

// Ambil header...
include '../header.php';
?>

<style type="text/css">

.ok {
    color: #006e28;
}

.error {
    color: #dd3c10;
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
                                            <?php if ($i != 7 && $i != 8) : ?>
                                            <span style="line-height: 25px" class="ok">Berhasil diupload dan <em>compile</em></span>
                                            <?php else : ?>
                                            <span style="line-height: 25px" class="error">Gagal di-<em>compile</em>. Silakan perbaiki dan upload ulang:</span><br/>
                                            &nbsp;&nbsp;<input type="file" size="30"/>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endfor; ?>
                                </table>
                                <hr/>
                                <form action="kumpul-latihan/upload-ch1-3.php">
                                <table>
                                    <tr>
                                        <td width="150" style="color: #888"></td>
                                        <td>&nbsp;&nbsp;<input id="upload_button" type="submit" class="button" value="Upload ulang"/></td>
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