<?php

    header("Content-Type: application/json; charset=UTF-8");
    
    require_once('connection.php');

    $query = mysqli_query( $connection, "SELECT * FROM produk");

    $tekshop = array();
    while($row=mysqli_fetch_array($query)){
        array_push($tekshop, array (
            'id_produk' => $row['id_produk'],
            'nama_produk' => $row['nama_produk'],
            'uk_display' => $row['uk_display'],
            'ram' => $row['ram'],
            'warna' => $row['warna'],
            'deskripsi' => $row['deskripsi'],
            'harga' => $row['harga'],
            'stock' => $row['stock']
        ) );          
    }

    echo json_encode(
        array('tekshop' => $tekshop)
    );
    
?>