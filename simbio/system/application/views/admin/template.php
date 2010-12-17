<html>
    <head>
        <base href="<?php echo base_url() ?>"/>
        <title>Dashboard SIMBIO</title>
        <script type="text/javascript" src="js/nicEdit.js"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
        </script>
    
        <link rel="stylesheet" type="text/css" href="style_admin.css" />

</head>
<body>
    <div id="header">
        <div id="menu">
            <ul>
                <?php $this->load->view('admin/menu') ?>
            </ul>
            <p>&nbsp;</p>
        </div>

        <div id="content">
            <?php $this->load->view($template_konten) ?>
        </div>

        <div id="footer">
		Copyright &copy; 2010 SIMBIO.
        </div>
    </div>
</body>
</html>