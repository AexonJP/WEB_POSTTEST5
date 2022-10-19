<?php 
session_start();
if ($_SESSION['priv'] != 'admin') {
    header("Location: ../");
    
}
require "../database.php"?>
<script>if ( window.history.replaceState ) {
 window.history.replaceState( null, null, window.location.href );
}
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" type="text/css" href="edit.css">
 
    <title>Login</title>
</head>
<body>
        <p style = 'font-size:20px; color :black'>Tidak jadi melakukan pengeditan data?<a href="./">kembali</a></p>
        <?php
        $data = array('ongoing', 'completed', 'movie'); 
        for ($i = 0; $i<3;$i++){ 
            $ok = strtoupper($data[$i]);
            $section = $data[$i];
            echo"<table border ='1px'><th colspan='5'>FILE PADA $ok</th><tr><td style= 'width :5%'>No</td><td style = 'width: 25%'>Judul</td><td style = 'width: 25%'>Nama File</td><td colspan= '2' style = 'width: 5%'>operator</td></tr>";
                $datas = mysqli_query($conn, "SELECT `id`, `judul`, `gambar` FROM `$data[$i]` ORDER BY id DESC");
                $no =1;
                 
                while ($row = mysqli_fetch_assoc($datas)) :
                    $judul = $row['judul'];
                    $id = $row['id'];
                    $gambar = $row['gambar'];
                    echo "<tr><td style = 'text-align : center'>$no</td> <td style = 'text-align : center'>$judul</td> <td style = 'text-align : center'>$gambar</td> <td style = 'text-align : center'><a href ='ubah.php?id=$id&section=$section'>Ubah</a></td> <td style = 'text-align : center'><a href ='hapus.php?id=$id&section=$section&gambar=$gambar'>Hapus</a></td></tr>";
                    $no++;
            
            endwhile;
            echo"</table>";
        }
        ?>
</body>
</html>