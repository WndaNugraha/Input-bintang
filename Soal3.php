<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengulangan</title>
</head>
<body>
    <form action="" method="post">
    <table align="center">
        <tr>
            <td><h3>Form Pengulangan</h3></td>
        </tr>
        <tr>
            <td></td>
            <td>1.Deret Bilangan Ganjil</td>
        </tr>
        <tr>
            <td></td>
            <td>2.Segitiga Sama Kaki Terbalik</td>
        </tr>
        <tr>
            <td></td>
            <td>3.Deret Bilangan Kelipatan 3</td>
        </tr>
        <tr>
            <td>Pilih</td>
            <td>: <input type="number" name="pilih"></td>
        </tr>
        <tr>
            <td>Masukan Angka</td>
            <td>: <input type="number" name="number"></td>
        </tr>
        <tr>
            <td><input type="submit" name="kirim" value="KIRIM"></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        </table>
    </form>
       
            <?php 
            if(isset($_POST['kirim'])){
$pilih = $_POST['pilih'];
$number = $_POST['number'];
            

        echo "<center>";
         if($pilih == "1"){ 
            echo "<b>Deret Bilangan Ganjil</b> <br>";
            for($a = 1; $a <= $number; $a+=2){
              echo "$a &nbsp";
                }
        }

         elseif($pilih == "2"){
             echo "<b>Segitiga Sama Kaki Terbalik </b><br>";
             for($a = $number; $a > 0; $a--){
                 for($b= $number; $b > $a; $b--){
                     echo "";
                 }
                 for($c =0; $c < $b; $c++){
                     echo "*";
                 }
                     echo "<br>";
             }
         }

         elseif($pilih == "3"){
             echo "<b>Deret Bilangan Kelipata 3 </b><br>";
                for($a = 3; $a <= $number; $a+=3){
                    echo "$a &nbsp";
                }

         }
        }
    
echo "</center>";
     ?>
       <center>
<p style="color-black"><a href="soal2.php"><h4>Kembali</h4></a></p>
</center>    
</body>
</html>


