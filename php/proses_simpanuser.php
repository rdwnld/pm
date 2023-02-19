<?php

require_once("koneksi.php");

if(isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    $query = mysqli_query($koneksi ,"insert into users values(null,'$username','$password','$level')");
    if($query) {
        header('location:listusers.php');
    }else{
        echo"gagal";
    }


}