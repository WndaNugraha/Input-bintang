<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji</title>
    <style>
    </style>
</head>
<body>
    <center>
        <h4>Penggajihan Karyawan</h4>
        <h2>PT.Selalu Makmur Jaya</h2>
        <form action="" method="post">
        <table>
            <tr>
                <td>Nama Bendahara</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nama Pekerja</td>
                <td>:</td>
                <td><input type="text" name="kerja"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="kelamin" value="laki laki">Laki-Laki
            <input type="radio" name="kelamin" value="perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Tanggal Gaji</td>
                <td>:</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><select name="jabatan" id="">
                    <option value="Direktur">Direktur</option>
                    <option value="Manager">Manager</option>
                    <option value="Sekertaris">Sekertaris</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="OB">OB</option>
                </select></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><select name="pendidikan" id="">
                    <option value="SD">SD</option>
                    <option value="SMA">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="S1">S1</option>
                    <option value="S1">S2</option>
                </select></td>
            </tr>
            <tr>
                <td>Status Pegawai</td>
                <td>:</td>
                <td><input type="Radio" name="status" value="tetap">Tetap
                    <input type="radio" name="status" value="kontrak">Kontrak</td>
            </tr>
            <tr>
                <td>Lembur</td>
                <td>:</td>
                <td><input type="text" name="lembur">Hari/ RP.20.000</td>
            </tr>
            <tr>
                <td>Potongan</td>
                <td>:</td>
                <td><input type="number" name="potongan"></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="KIRIM" name="kirim"></td>
        </tr>

        </table>
        </form>
    </center>
    
    <?php
if (isset($_POST['kirim'])) {
    $bendahara = $_POST['nama'];
    $kerja = $_POST['kerja'];
    $kelamin = $_POST['kelamin'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $lembur = $_POST['lembur'];
    $potongan = $_POST['potongan'];
    $status = $_POST['status'];

    if ($jabatan == "Direktur") {
        $gaji = 10000000;
    } elseif ($jabatan == "Manager") {
        $gaji = 7500000;
    } elseif ($jabatan == "Sekertaris"){
        $gaji = 5000000;
    } elseif ($jabatan == "Karyawan") {
        $gaji = 5000000;
    } elseif ($jabatan == "OB") {
        $gaji = 15000000;
    } else {
        echo "gaji tidak ada<br>";
    }

    if ($pendidikan == "SD") {
        $tunjangan = 200000;
    } elseif ($pendidikan == "SMP") {
        $tunjangan = 500000;
    } elseif ($pendidikan == "SMA") {
        $tunjangan = 1000000;
    } elseif ($pendidikan == "S1") {
        $tunjangan = 1500000;
    } elseif ($pendidikan == "S2") {
        $tunjangan = 2000000;
    } else {
        echo "none";
    }

    if($status == "tetap"){
        $tetap = 500000;
    } else if($status == "kontrak"){
        $tetap = 0;
    }

    $VakasiLembur = $lembur * 20000;
    if($status == "tetap"){
        $total = ($gaji + $tunjangan + $VakasiLembur + $tetap) - $potongan;
    } elseif($status == "kontrak"){
        $total = ($gaji + $tunjangan + $VakasiLembur) - $potongan;
    }
     
    

    echo "<center>";
    echo "<br>";
    echo "<h2>Struk Gaji Karyawan</h2>";
    echo "-----------------------------------------------------------------<br>";
    echo "<table>";
    echo "<tr>";
    echo "<td></td><td></td><td><p align=right>Tanggal : $tanggal</p></td> ";
    echo "</tr>";
    echo "<tr>";
    echo "<td><h3>Gaji Pokok</h3></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nama Karyawan </td><td>:</td><td>$kerja</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin </td><td>:</td><td>$kelamin</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Pendidikan Terakhir </td><td>:</td><td>$pendidikan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jabatan </td><td>:</td><td>$jabatan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Gaji </td><td>:</td><td>Rp. $gaji</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><h3>Tunjangan</h3></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tunjangan Pendidikan </td><td>:</td><td>Rp. $tunjangan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Vakasi Lembur </td><td>:</td><td>Rp. $VakasiLembur</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Bonus Status Kerja</td><td>:</td><td>Rp. $tetap</td>";
    echo "<tr>";
    echo "<td><h3>Potongan</h3></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Potongan BPJS</td><td>:</td><td>Rp. $potongan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><h3>Total Gaji</h3></td><td>:</td><td>Rp. $total</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td></td><td></td><td><p align=right>Bendahara : $bendahara</p></td> ";
    echo "</tr>";
    echo "</table>";
    echo "</center>";

}

?>
<center>
<p><a href="soal1.php"><h4>Kembali</h4></a></p>
 <p><a href="soal3.php"><h4>Pindah Ke Halaman Selanjutnya</h4></a></p>
</center>
<hr>
</body>
</html>
