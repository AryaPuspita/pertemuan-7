<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert ke tabel mhs</title>
</head>
<body>
    
    <form method="POST" action="mhs-insertdataform.php">
        NIM <br>
        <input type="text" name="txNIM"><br>
        NAMA<br>
        <input type="text" name="txNAMA"><br>
        JURUSAN<br>
        <select name="txJUR">
            <option value="SK"> SK </option>
            <option value="TI"> TI </option>
        </select><br>
        PASSCODE
        <input type="text" name="txPASSCODE"><br>
        <br><br>
        <button type=submit> simpan data </button>
    </form>
</body>
</html>