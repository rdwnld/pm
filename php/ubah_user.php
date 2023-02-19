<?php
require_once("koneksi.php");
$user_id = $_GET['id'];

$query = mysqli_query($koneksi , "select * from users where user_id='$user_id'");
while($data = mysqli_fetch_object($query)) {

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Ubah Users</h1>
    <hr>
<form action="proses_ubahuser.php" method="POST">
<table >
    <input type="hidden" name="id" value="<?=$data->user_id?>">
    <tr>
    <td>username </td>
    <td>:</td>
    <td><input type="text" name="username" value="<?=$data->username?>"></td>  
    
    </tr>

    <tr>
    <td>password</td>
    <td>:</td>
    <td><input type="password" name="password" value="<?=$data->password?>"></td> 
        
    </tr>

    <tr>
    <td>level </td>
    <td>:</td>
    <td><input type="text" name="level" value="<?=$data->level?>"></td>
    </td>
    </tr>

    
    </tr>

    
</table>
<input type="submit" value="Simpan" name="simpan">
</form>
</body>
</html>
<?php
}
?>