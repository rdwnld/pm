<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <hr>
<form action="proses_simpan.php" method="POST" enctype="multipart/form-data">
<table >
    <tr>
    <td>judul </td>
    <td>:</td>
    <td><input type="text" name="judul"></td>  
    
    </tr>

   <tr>
    <td>deskripsi</td>
    <td>:</td>
    <td><textarea name="text" id="" cols="30" rows="1 0"></textarea></td> 
        
    </tr>

    <tr>
    <td>penulis </td>
    <td>:</td>
    <td><input type="text" name="penulis"></td>
    </td>
    </tr>

    <tr>
    <td>penerbit </td>
    <td>:</td>
   <td><input type="text" name="penerbit"></td> 
    </td>
    </tr>

    <tr>
    <td>gambar </td>
    <td>:</td>
    <td><input type="file" name="gambar"></td>  
    </td>
    </tr>

    
</table>
<input type="submit" value="Simpan" name="simpan">
</form>
</body>
</html>