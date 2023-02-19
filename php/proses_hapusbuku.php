<?php
require_once("koneksi.php");

$id_buku = $_GET['id'];

$query = mysqli_query($koneksi, "delete from buku where id_buku='$id_buku'");

if ($query) {
    header('location:listbuku.php');
} else {
    echo 'data gagal terhapus';
}