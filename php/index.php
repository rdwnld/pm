<?php
session_start();
if($_SESSION['login'] == null) {
    header('location:login.php?er=nyusup');
}else{
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
         .y {
            width: 100px;
            margin: 10px;
            background-color: blue;
            border-radius: 2px;
            padding: 8px;
             
        }
         
        a{
            color: white;
            text-decoration: none;
        }

        .logout {
            width: 100px;
            margin: 10px;
            background-color: red;
            border-radius: 2px;
            padding: 8px;
        }
    </style>
</head>

<body>

<center><h2>PERPUSTAKAAN MINI</h2>

selamat datang, <b><?=$_SESSION['username'];?></b> 
<div class="logout">
<a href="logout.php">Logout</a>

</div> 
<hr>
        <?php
        if($_SESSION['level'] == 'Petugas') {

        ?>
    
    <div class="y">
        <a href="listusers.php">Users</a>
    </div>

    <div class="y">
        <a href="listbuku.php">Buku</a>
    </div>

    <div class="y">
        <a href="peminjaman.php">peminjaman</a>
    </div>

    <div class="y">
        <a href="listsiswa.php">siswa</a>
    </div>
<?php
}

if($_SESSION['level']== 'Siswa') {
    ?>
    <div class="y">
        <a href="listusers.php">data pinjam</a>
    </div>
    </center>
   <?php
   }
   ?>
</body>
</html>
  

  <?php
}
?>
