<?php
    if(isset($_POST['txNIM'])){
    include_once ("koneksidb.php");
    $nim =$_POST['txNIM'];
    $nama =$_POST['txNAMA'];
    $jur = $_POST["txJUR"];
    $passcode = $_POST["txPASSCODE"];

    $sql = "INSERT INTO mhs(NIM,NAMA,JURUSAN,PASSCODE) Values('$nim','$nama','$jur','$passcode');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "inser gagal<br>";
    }
}else{
    header("location : mhs-insertdata.php");
}

