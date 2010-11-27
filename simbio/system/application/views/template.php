<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <base href="<?php echo base_url() ?>"/>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
        <title><?php echo $judul; ?> | SIMBIO</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>

        <div id="wrap">

            <div class="header">
                <?php $this->load->view('header') ?>
            </div>


            <div class="center_content">
                <div class="left_content">

                    <?php $this->load->view($template_konten) ?>

                    <div class="clear"></div>
                    
                </div><!--end of left content-->

                <div class="right_content">

                    <?php $this->load->view('sidebar') ?>

                    <div class="clear"></div>
                </div><!--end of center content-->

                <div class="clear"></div>
                <div class="footer">
                    <?php $this->load->view('footer') ?>

                </div>


            </div>
        </div>

    </body>
</html>