<?php

require_once("koneksi.php");

if(isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $query = mysqli_query($koneksi ,"insert into siswa values(null,'$nis','$nama','$kelas')");
    if($query) {
        header('location:listsiswa.php');
    }else{
        echo"gagal";
    }


}