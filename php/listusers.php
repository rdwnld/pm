
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        .tombol {
            background-color: green;
            padding: 3px;
            margin-bottom: 7px;
            width: 100px;
            height: 20px;

        }
        .ubah{
            float: left;
            margin: 10px;
            background-color: red;
            border-radius: 2px;
            padding: 8px;
        }
        .hapus{
            float: left;
            margin: 10px;
            background-color: blueviolet;
            border-radius: 2px;
            padding: 8px;
        }
        a{
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <marquee ><h1>Daftar Users</h1></marquee>
<hr>
    <center>
    <div class="tombol"><a href="tambah_users.php">Tambah</a></div>
    </center>
  
    
<table border="3" style="margin: auto;">
<tr style="background-color: dimgray;">
<th>No</th>
<th>username</th>
<th>Password</th>
<th>Level</th>
<th>Aksi</th>
</tr>

<?php
require_once("koneksi.php");

$query = mysqli_query($koneksi, "select * from users ");

// echo '<img src="images/' . $data["gambar"] . '">';

$no = 1;
while ($data
 = mysqli_fetch_object($query)) {
?> 
    
    <tr>
    <td><?=$no?></td>
    <td><?=$data->username?></td>
    <td><?=md5($data->password)?></td>
    <td><?=$data->level?></td>
    <td>
    <div class='ubah'>

    <a href='ubah_user.php?id=<?= $data->user_id?>'>Ubah</a>
     
    </div>

    <div  class='hapus'>

     <a href='proses_hapususer.php?id=<?= $data->user_id?>'   onclick="return confirm('yakin?');">Hapus</a>

    </div>
   

    </td>
    </tr>
    <?php
    $no++;
}
?>
    
    </table>

</body>
</html>