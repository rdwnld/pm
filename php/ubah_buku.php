<?php
require_once("koneksi.php");
$id_buku = $_GET['id'];

$query = mysqli_query($koneksi , "select * from buku where id_buku='$id_buku'");
while($data = mysqli_fetch_object($query)) {

    ?>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Ubah Buku</h1>
    <hr>
<form action="proses_ubah.php" method="POST" enctype="multipart/form-data">
<table >
<input type="hidden" name="id" value="<?= $data->id_buku;?>">
    <tr>
    
    <td>judul </td>
    <td>:</td>
    <td><input type="text" name="judul" value="<?= $data->judul_buku;?>"></td>  
    
    </tr>

    <tr>
    <td>deskripsi</td>
    <td>:</td>
    <td><textarea name="deskripsi" id="" cols="30" rows="10" ><?= $data->deskripsi;?></textarea></td> 
        
    </tr>

    <tr>
    <td>penulis </td>
    <td>:</td>
    <td><input type="text" name="penulis" value="<?= $data->penulis;?>"></td>
    </td>
    </tr>

    <tr>
    <td>penerbit </td>
    <td>:</td>
   <td><input type="text" name="penerbit" value="<?= $data->penerbit;?>"></td> 
    </td>
    </tr>

    <tr>
    <td>gambar </td>
    <td>:</td>
    <td><input type="file" name="gambar" ><br>
    <img src="images/<?$data->gambar;?>" alt="" width="100px">
</td>  
    </td>
    </tr>

    
</table>
<input type="submit" value="Simpan" name="simpan">
</form>
</body>
</html>
<?php
}
?>