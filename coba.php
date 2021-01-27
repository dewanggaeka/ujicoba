<?php 
$conn = new mysqli("localhost", "root", "", "db_toko_atk");

 $sql = $conn->query("SELECT * FROM barang WHERE id_barang = '8886008101053'");
        $tampil = $sql->num_rows;
        echo $tampil;
 ?>