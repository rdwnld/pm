<?php
require_once("koneksi.php");
?>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<form action="proses_simpanpinjaman.php" method="POST">

<table>
    <tr>
        <td>Siswa</td>
        <td>:</td>
        <td>
        <select name="siswa" >
        <?php
        $query_siswa = mysqli_query($koneksi , "select * from siswa");
        while($data_siswa = mysqli_fetch_object($query_siswa)) {
        ?>

        <option value="<?=$data_siswa->id_siswa?>" ><?=$data_siswa->nama?></option>
        <?php
        }
        ?>
        </select>
        </td>
    </tr>

    <tr>
        <td>Buku</td>
        <td>:</td>
        <td>
        <select name="buku" >
        <?php
        $query_buku = mysqli_query($koneksi , "select * from buku");
        while($data_buku = mysqli_fetch_object($query_buku)) {
        ?>

        <option value="<?=$data_buku->id_buku?>" ><?=$data_buku->judul_buku?></option>
        <?php
        }
        ?>
        </select>
        </td>
    </tr>

    <tr>    
        <td>tanggal kembali</td>
        <td>:</td>
        <td><input type="date" name="tgl_kembali"></td>
    </tr>

    <tr>
      <td>
      <input type="submit" name="simpan" value="simpan">
      </td>  
    </tr>
</table>
</form>

<table border="1" cellspacing="0" cellpadding="5">
<tr>
    <td>No</td>
    <td>No_peminjaman</td>
    <td>id_buku</td>
    <td>judul_buku</td>
    <td>nama siswa</td>
    <td>tgl_pinjam</td>
    <td>tgl_kembali</td>
</tr>
<?php
$no = 1;
$query_peminjaman= mysqli_query($koneksi,
"select * from peminjaman
inner join buku on buku.id_buku = peminjaman.id_buku
inner join siswa on siswa.id_siswa = peminjaman.id_siswa");
while($data_peminjaman = mysqli_fetch_object($query_peminjaman)) {

?>
<tr>
    <td><?=$no?></td>
    <td><?=$data_peminjaman->no_pinjam?></td>
    <td><?=$data_peminjaman->id_siswa?></td>
    <td><?=$data_peminjaman->judul_buku?></td>
    <td><?=$data_peminjaman->nama?></td>
    <td><?=$data_peminjaman->tgl_pinjam?></td>
    <td><?=$data_peminjaman->tgl_kembali?></td>
</tr>
<?php
$no++;
}
?>
</table>
</body>
</html>