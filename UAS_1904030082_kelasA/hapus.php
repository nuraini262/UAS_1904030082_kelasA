<?php
require "function.php";

// Agar Tidak Bisa Masuk Secara Pengetikan Manual Pada Url
if (!isset($_GET['id'])) {
    header("location: baju.php");
    exit;
}

$id = $_GET['id'];
if (hapus($id) > 0) {
    echo
    "<script>
        alert('Data Berhasil di Hapus');
        document.location.href = 'baju.php';
        </scrupt>";
} else {
    echo
    "<script>
        alert('Data Gagal Dihapus');
        </scrupt>";
}

$iid = $_GET['id'];
if (delete($iid) > 0) {
    echo
    "<script>
        alert('Data Berhasil di Hapus');
        document.location.href = 'baju.php';
        </scrupt>";
} else {
    echo
    "<script>
        alert('Data Gagal Dihapus');
        </scrupt>";
}