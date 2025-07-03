<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>matakuliah</title>
</head>

<body>
    <h1>Form Tambah Data</h1>
    <form action="/matakuliah/simpan" method="post">
    @csrf
    ID: <input type="text" name="txtid" required> <br />
    Kode Matakuliah: <input type="text" name="txtkdmatakuliah" required> <br />
    Matakuliah: <input type="text" name="txtmatakuliah" required> <br />
    <input type="submit" value="Simpan Data">
</form>
</body>

</html>