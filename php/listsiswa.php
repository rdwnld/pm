
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
    <marquee ><h1>Daftar siswa</h1></marquee>
<hr>
    <center>
    <div class="tombol"><a href="tambah_siswa.php">Tambah</a></div>
    </center>
  
    
<table border="3" style="margin: auto;">
<tr style="background-color: dimgray;">
<th>No</th>
<th>Nis</th>
<th>Nama</th>
<th>Kelas</th>
<th>Aksi</th>
</tr>

<?php
require_once("koneksi.php");

$query = mysqli_query($koneksi, "select * from siswa ");

// echo '<img src="images/' . $data["gambar"] . '">';

$no = 1;
while ($data
 = mysqli_fetch_object($query)) {
?> 
    
    <tr>
    <td><?=$no?></td>
    <td><?=$data->nis?></td>
    <td><?=$data->nama?></td>
    <td><?=$data->kelas?></td>
    <td>
    <div class='ubah'>

    <a href='ubah_siswa.php?id=<?= $data->id_siswa?>'>Ubah</a>
     
    </div>

    <div  class='hapus'>

     <a href='proses_hapussiswa.php?id=<?= $data->id_siswa?>'   onclick="return confirm('yakin?');">Hapus</a>

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