<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaksinasi</title>
</head>
<body>
    
    <form action="" method="POST">
        <table align="center";>
            <tr>
                <td><h3>Syarat Masuk Ke Miko Mall</h3></td>
            </tr>
            <tr>
                <td>Nama Anda</td>
                <td>: <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Status Vaksin</td>
                <td>: <select name="status">--Status Vaksin--
                    <option value="Sudah Vaksin" name="Sudah Vaksin">Sudah Vaksin</option>
                    <option value="Belum Vaksin" name="Belum Vaksin">Belum Vaksin</option>
                </select></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="kirim" value="KIRIM">
                </td>
            </tr>


        </table>
    </form>

<?php
     if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $status = $_POST['status'];
            if($status == "Sudah Vaksin"){
              echo "<center>";
              echo "<table>";
              echo "<td>Nama Anda</td><td>: $nama</td><br>";
              echo "<td>Status Vaksin</td> <td>: $status</td>"; 
              echo "<td><h2>Diizinkan</h2></td>"; 
             
            }
            elseif($status == "Belum Vaksin"){
              echo "<td>Nama Anda</td> <td>: $nama</td><br>";
              echo "<td>Status Vaksin</td> <td>: $status</td>";
              echo "<td><h2>Tidak Diizinkan</h2></td>"; 
              echo "<td><a href=https://www.pedulilindungi.id>Silahkan Daftar Vaksin</a></td>";
              echo "<table>";
              echo "</center>";
                 }
                } 
                ?>
<center>
 <p><a href="soal2.php"><h4>Pindah Ke Halaman Selanjutnya?</h4></a></p>
</center>
    </body>
</html>
                         
