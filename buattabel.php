<?php
/*
1. buat koneksi ke server
2. buat skript sql untuk menciptakan tabel
    tabel : mhs
    feild : NIM Char, NAMA STRING, JURUSAN STRING, PASSCODE STRING
3. execute script
4. cek status
*/
include_once("koneksidb.php");
$sql = "CREATE TABLE mhs(
    NIM Varchar(8) PRIMARY KEY,
    NAMA Varchar(50),
    JURUSAN Varchar(20),
    PASSCODE Varchar(10)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "tabel sukses";
}else{
    echo "tabel gagal";
}