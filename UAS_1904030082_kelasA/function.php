<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030082');

// Pemanggilan Tabel db_tokobaju
function query($query)
{
    global $conn;

    // Mengambil Seluruh Data
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    // Pemanggilan Elemen Data Dengan Rapih
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $kode_baju = htmlspecialchars($data['kode_baju']);
    $nama_baju = htmlspecialchars($data['nama_baju']);
    $harga_baju = htmlspecialchars($data['harga_baju']);
    $stok_baju = htmlspecialchars($data['stok_baju']);
    $gambar_baju = htmlspecialchars($data['gambar_baju']);

    $query = "INSERT INTO db_tokobaju
    VALUES
    (null,'$kode_baju','$nama_baju','$harga_baju','$stok_baju','$gambar_baju');";
    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM db_tokobaju WHERE id=$id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = $data['id'];
    $kode_baju = htmlspecialchars($data['kode_baju']);
    $nama_baju = htmlspecialchars($data['nama_baju']);
    $harga_baju = htmlspecialchars($data['harga_baju']);
    $stok_baju = htmlspecialchars($data['stok_baju']);
    $gambar_baju = htmlspecialchars($data['gambar_baju']);

    $query = "UPDATE db_tokobaju SET
    kode_baju ='$kode_baju',
    nama_baju ='$nama_baju',
    harga_baju ='$harga_baju',
    stok_baju ='$stok_baju',
    gambar_baju ='$gambar_baju'

    WHERE id =$id;";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    global $conn;

    $query = "SELECT * FROM db_tokobaju WHERE nama_baju LIKE'%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}