<?php

$db = pg_connect("host=localhost port=5432 dbname=perpustakaan user=postgres password=02062002");


if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "delete from books where id = $id";
    $query = pg_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: book-view.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    echo "gak bisa masuk";
}

?>