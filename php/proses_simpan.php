<?php

require_once("koneksi.php");

if(isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    $namafile =$_FILES['gambar']['name'];
    $ukuran =$_FILES['gambar']['size'];
    $error =$_FILES['gambar']['error'];

    if($ukuran > 0 || $eror == 0) {
        $move = move_uploaded_file($_FILES['gambar']
        ['tmp_name'],'/images' . $namafile);

        if($move) {
            echo "file '$namafile' dengan ukuran $ukuran sudah terunggah";
        }else{
            echo "terjadi kesalahan";
        }

    }else{
        echo "file tidak terunggah karna :" . $error;
    }

    $query = mysqli_query($koneksi ,"insert into buku values(null,'$judul','$deskripsi','$penulis','$penerbit','$namafile')");
    if($query) {
        header('location:listbuku.php');
    }else{
        echo"gagal";
    }


}