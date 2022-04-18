<?php
    
    include_once("koneksidb.php");
    $nim = "133333";
    $sql = "DELETE FROM mhs WHERE nim='$nim';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }