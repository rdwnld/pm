<?php
require_once("koneksi.php");
$id_siswa = $_GET['id'];

$query = mysqli_query($koneksi , "select * from siswa where id_siswa='$id_siswa'");
while($data = mysqli_fetch_object($query)) {

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Ubah Siswa</h1>
    <hr>
<form action="proses_ubahsiswa.php" method="POST">
<table >
    <input type="hidden" name="id" value="<?=$data->id_siswa?>">
    <tr>
    <td>nis</td>
    <td>:</td>
    <td><input type="text" name="nis" value="<?=$data->nis?>"></td>  
    
    </tr>

    <tr>
    <td>nama</td>
    <td>:</td>
    <td><input type="text" name="nama" value="<?=$data->nama?>"></td> 
        
    </tr>

    <tr>
    <td>kelas </td>
    <td>:</td>
    <td>
        <select name="kelas" value="<?=$data->$kelas?>">
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
        </select>
    </td>
    </td>
    </tr>

    
    </tr>

    
</table>
<input type="submit" value="simpan" name="simpan">
</form>
</body>
</html>
<?php
}
?>