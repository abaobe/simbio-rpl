<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
    <head profile="http://gmpg.org/xfn/11">

        <base href="http://localhost/imk/"/>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <!-- Meta Images -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
        
        <title><?php echo $judul_halaman ?> - Learning Center Algoritma dan Pemrograman</title>

        <!-- Stylesheets -->

        <link rel="stylesheet" href="images/style000.css" type="text/css" media="screen" />

        <script type='text/javascript' src='images/jquery00.js'></script>


    </head>
    <body class="home blog">

        <div id="page" class="fix">
            <div id="wrapper" class="fix" >
                <div id="header" class="fix">
                    <div id="headertitle">
                        <h1 id="blogtitle"><a href="./"><span class="sheen">&nbsp;</span>Learning Center</a></h1>
                        <div id="blogdescription"><span style="color:#FF6600">Algoritma dan Pemrograman</span></div>
                    </div>
                    <div class="icons">


                        <div class="nav-icon">
                            <span style="color: #777777">Anda login sebagai</span> <strong>Algor (G64080000)</strong> &middot; <a href="logout" title="Klik untuk logout">Logout</a>
                        </div>




                    </div>
                </div><!-- /header -->
                <div id="nav" class="fix">
                    <div class="mnav dropdown fix">
                            <ul>
                            <li class="page_item" style="margin-left: 6px;">
                                <a href="./" title="" <?php if(strpos($_SERVER['REQUEST_URI'], 'home') != FALSE) echo "class='current_page'" ?>>Home</a>
                            </li>
                            <li class="page_item">
                                <a href="kumpul-latihan" title="" <?php if(strpos($_SERVER['REQUEST_URI'], 'kumpul-latihan') != FALSE || strpos($_SERVER['REQUEST_URI'], 'beri-komentar') != FALSE) echo "class='current_page'" ?>>Latihan</a>
                            </li>
                            <li class="page_item">
                                <a href="nilai-latihan" title="" <?php if(strpos($_SERVER['REQUEST_URI'], 'nilai-latihan') != FALSE) echo "class='current_page'" ?>>Nilai Latihan</a>
                            </li>
                            <li class="page_item">
                                <a href="materi-kuliah" title="" <?php if(strpos($_SERVER['REQUEST_URI'], 'materi-kuliah') != FALSE) echo "class='current_page'" ?>>Materi Kuliah</a>
                            </li>
                            <li class="page_item">
                                <a href="ubah-password" title="" <?php if(strpos($_SERVER['REQUEST_URI'], 'ubah-password') != FALSE) echo "class='current_page'" ?>>Ubah Password</a>
                            </li>
                        </ul>
                        <form method="get" class="searchform" action="">
                            <span class="left">&nbsp;</span>
                            <input type="text" value="Cari soal" name="s" class="s" onfocus="if (this.value == 'Cari soal') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Cari soal';}" />
                            <span class="right"><input type="submit" class="searchsubmit" value="Go" /></span>

                        </form>
                    </div>
                    <div class="clear"></div>
                </div>

                <div id="container" class="fix ">
                    <!-- Code for subnav if pages have parents.. -->