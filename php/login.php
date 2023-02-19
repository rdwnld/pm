<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
</head>
<body>

<h1>Login</h1>
<hr>
<?php

$pesan = $_GET['er'];
if($pesan == 'logout') {
    echo "anda berhasill logout";
}
if($pesan == 'gagal') {
    echo "anda gagal login";
}

if($pesan == 'nyusup') {
    echo"anda mau nyusup ya?";
}
?>

<form action="proseslogin.php" method="POST">
    <table>
 
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

    <!-- <tr>
    <td>level </td>
    <td>:</td>
    <td><select name="level" >
        <option value="">-</option>
        <option value="petugas">petugas</option>
        <option value="siswa">siswa</option>
        </select>
    </td>
    
    </tr> -->


</table>
<input type="submit" name="login" value="login">

</form>
<br>
    
</body>
</html>