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
    <div id="header" style="width: 600px">

        <div id="content" style="margin-left: 10px">
            <?php $this->load->view($template_konten) ?>
        </div>

    </div>
</body>
</html>