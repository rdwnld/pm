<?php
session_start();
require_once("koneksi.php");

if(isset($_POST['login'])) {
$username = $_POST['username'];
$password = md5($_POST['password']);


$query = mysqli_query($koneksi,"select * from users where username='$username' and password='$password'");

$data = mysqli_num_rows($query);
$datausers = mysqli_fetch_object($query);

if($data > 0) {
    $_SESSION['login'] = 1;
    $_SESSION['username'] = $datausers->username;
    $_SESSION['level'] = $datausers->level;
    header('location:index.php');
}else{
    header('location:login.php');
}
}