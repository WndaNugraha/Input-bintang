<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
    <table>
        <form action="" method="post">
            <tr>
                <td>Masukan Baris Bintang : </td>
                <td> <input type="number" name="bil"> </td>
            </tr>
            <tr>
                <td rowspan="5" align="center">Pilih Bentuk Segitiga : </td>
            </tr>
            <tr>
                <td> <input type="radio" name="siku">Siku-siku</td>
            </tr>
            <tr>
                <td> <input type="radio" name="sempurna">Sempurna</td>
            </tr>
            <tr>
                <td> <input type="radio" name="terbalik">Siku terbalik</td>
            </tr>
            <tr>
                <td> <input type="radio" name="st">Sempurna Terbalik</td>
            </tr>
            <tr>
                <td> <input type="submit" name="simpan" value="Submit"></td>
            </tr>
        </form>
    </table>
    <br>
</body>
</html>

<?php

if(isset($_POST['simpan'])){
    $bil = $_POST['bil'];


    if(isset($_POST['siku'])){
        for($a = $bil ; $a > 0; $a--){
            for($b=$bil; $b >=$a; $b--){
                echo "*";
            }
            echo "<br>";
    }
    }

    elseif(isset($_POST['sempurna'])){
        for($a = $bil; $a >= 0; $a--){
            for($b= 0; $b < $a; $b++){
                echo "&nbsp";
            }
            for($c =$bil; $c > $b; $c--){
                echo "*";
            }
                echo "<br>";
        }
    }
    

    elseif(isset($_POST['terbalik'])){
        for($a = $bil; $a > 0; $a--){
            for($b= 0; $b < $a; $b++){
                echo "*";
            }
                echo "<br>";
        }
    }

    elseif(isset($_POST['st'])){
        for($a = $bil; $a > 0; $a--){
            for($b= $bil; $b > $a; $b--){
                echo "&nbsp";
            }
            for($c =0; $c < $b; $c++){
                echo "*";
            }
                echo "<br>";
        }
}
}
?>
