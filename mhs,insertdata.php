<?php
    include_once ("koneksidb.php");
    $nim ="21112";
    $nama = "abaaa";
    $jur = "dgm";
    $passcode = "123";

    $sql = "INSERT INTO mhs(NIM,NAMA,JURUSAN,PASSCODE) Values('$nim','$nama','$jur','$passcode');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "inser gagal<br>";
    }
