<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form Tambah Data User</h1>
    <form method="post" action="/user/tambah_simpan">
        {{csrf_field()}}
        <label for="Username"></label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br><br>
        <label for="Nama"></label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br><br>
        <label for="Password"></label>
        <input type="text" name="password" placeholder="Masukkan Password">
        <br><br>
        <label for="Level ID"></label>
        <input type="number" name="level_id" placeholder="Masukkan ID Level">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
    
</body>

</html>