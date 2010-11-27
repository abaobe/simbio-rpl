<?php

echo form_open('home/cari');

echo "Cari : ";

echo form_input(array('name' => 'q', 'class' => 'search_input', 'value' => $this->input->post('q')));

echo form_dropdown('kategori', array('produk' => 'Produk', 'artikel' => 'Artikel'));

echo form_submit('submit', 'Go');

echo form_close();

?>
