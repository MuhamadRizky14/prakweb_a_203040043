<?php
function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'prakweb_a_203040043_pw');
}
 
function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    // jika hasilnya hanya 1 data
    if( mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }
    $rows = [];
while ($row = mysqli_fetch_assoc($result)) 
    {
    $rows[] = $row;
    }

    return $rows;
}

function cari($keyword)
{

    $conn = koneksi();

    $query = "SELECT * FROM buku
    WHERE 
    nama_buku LIKE '%$keyword%' OR
    pengarang LIKE '%$keyword%'
    ";


    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}