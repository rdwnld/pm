<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Tambah Users</h1>
    <hr>
<form action="proses_simpanuser.php" method="POST" enctype="multipart/form-data">
<table >
    <tr>
    <td>username </td>
    <td>:</td>
    <td><input type="text" name="username"></td>  
    
    </tr>

    <tr>
    <td>password</td>
    <td>:</td>
    <td><input type="password" name="password"></td> 
        
    </tr>

    <tr>
    <td>level </td>
    <td>:</td>
    <td>
        <select name="level" id="">
            <option value="Petugas">Petugas</option>
            <option value="Siswa">Siswa</option>
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