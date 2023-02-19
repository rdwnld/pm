<?php

require_once("koneksi.php");

if(isset($_POST['simpan'])) {
    $id_siswa = $_POST['id']; 
    $nis = $_POST['nis']; 
    $nama = $_POST['nama'];
    $kelas= $_POST['kelas'];

    $query = mysqli_query($koneksi ," update siswa set 
    nis='$nis',
    nama='$nama',
    kelas='$kelas'
    where id_siswa=$id_siswa");
    if($query) {
        header('location:listsiswa.php');
    }else{
        echo"gagal";
    }


}