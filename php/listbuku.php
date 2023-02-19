<html>

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

        .ubah {
            float: left;
            margin: 10px;
            background-color: blue;
            border-radius: 2px;
            padding: 8px;
        }

        .hapus {
            float: left;
            margin: 10px;
            background-color: red;
            border-radius: 2px;
            padding: 8px;
        }

        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>


    <marquee>
        <h1>DAFTAR LIST BUKU</h1>
    </marquee>

    <center>
        <div class="tombol"><a href="tambah_buku.php">Tambah</a></div>
    </center>
    <table border="2" style="margin: auto;">
        <tr style="background-color: dimgray;">
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Cover</th>
            <th>Aksi</th>
        </tr>
        <?php

        require_once("koneksi.php");


        $query = mysqli_query($koneksi, "select * from buku ");

        // echo '<img src="images/' . $data["gambar"] . '">';

        $no = 1;
        while ($data
         = mysqli_fetch_object($query)) {
        ?> 
            
            <tr>
            <td><?=$no?></td>
            <td><?=$data->judul_buku?></td>
            <td><?=$data->penulis?></td>
            <td><?=$data->penerbit?></td>
            <td><img src='images/<?=$data->gambar?>' width='100px'></td>
            <td>
            <div class='ubah'>

            <a href='ubah_buku.php?id=<?= $data->id_buku?>'>Ubah</a>
             
            </div>

            <div  class='hapus'>

             <a href='proses_hapusbuku.php?id=<?= $data->id_buku?>'   onclick="return confirm('yakin?');">Hapus</a>

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