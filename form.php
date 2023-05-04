<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2> FORM TAMBAH MAHASISWA </h2>
   <form action="simpan.php" method="POST">
    NIM : <br>
    <input type="text" name="txtnim"><br>
    nama : <br>
    <input type="text" name="txtnama"><br>
    jenis kelamin : <br>
    <select name="txtjenkel">
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
</select><br>
Tempat Tanggal Lahir :<br>
<input type="text" name="txtlahir"><br>
nomor hp:<br>
<input type="text" name="txthp"><br>
<button type="submit">Simpan</button>
</form>    
</body>
</html>