<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="POST">
        <div class="kalkulator">
        <h1>Kalkulator</h1>
        <input type="number" name="bil1" class="bil" placeholder="Masukan Bilangan Pertama">
        <br>
        <input type="number" name="bil2" class="bil" placeholder="Masukan Bilangan Kedua">
        <br>
        <select name="pilih" class="pilih">
            <option value="tambah" name="tambah">+</option>
            <option value="kurang" name="kurang">-</option>
            <option value="kali" name="kali">x</option>
            <option value="bagi" name="bagi">/</option>
        </select>
        <input type="submit" name="hitung" value="Hitung" class="tombol">
        
        <?php
        if(isset($_POST['hitung'])){
    $bil1 = @$_POST['bil1'];
    $bil2 = @$_POST['bil2'];
    $pilih = @$_POST['pilih'];

       if($pilih == "tambah"){
    $hasil = $bil1 + $bil2;
     
       }
    
    elseif($pilih == "kurang"){
        $hasil = $bil1 - $bil2;
         ;
           }
    elseif($pilih == "kali"){
        $hasil = $bil1 * $bil2;
         
           }
    elseif($pilih == "bagi"){
         $hasil = $bil1 / $bil2;
         
               }
            }
        ?>
        </form>
        <br>
        <?php if(isset($_POST['hitung'])){ ?>
			<input type="number" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="number" value="0" class="bil">
		<?php } ?>
        </div>
</body>
</html>
