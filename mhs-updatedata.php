<?php

    include_once("koneksidb.php");
    $nim = "111111";
    $namabaru = "arye";
    $sql = "UPDATE mhs SET NAMA='$namabaru' WHERE nim='$nim';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }