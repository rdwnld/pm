<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Tambah Siswa</h1>
    <hr>
<form action="proses_simpansiswa.php" method="POST" >
<table >
    <tr>
    <td>Nis </td>
    <td>:</td>
    <td><input type="text" name="nis"></td>  
    
    </tr>

    <tr>
    <td>Name</td>
    <td>:</td>
    <td><input type="text" name="nama"></td> 
        
    </tr>

    <tr>
    <td>Kelas </td>
    <td>:</td>
    <td>
       <select name="kelas" >
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
       </select>
    </td>
    </td>
    </tr>

    
    </tr>

    
</table>
<input type="submit" value="Simpan" name="simpan">
</form>
</body>
</html>