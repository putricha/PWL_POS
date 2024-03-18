<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <h1>Form Ubah Data User</h1>
    <form method="post" action="/user/ubah_simpan/{{ $data->user_id }}">
        {{csrf_field()}}
        {{method_field('PUT')}}

        <label for="Username"></label>
        <input type="text" name="username" placeholder="Masukkan Username" value="{{ $data->username }}">
        <br><br>
        <label for="Nama"></label>
        <input type="text" name="nama" placeholder="Masukkan Nama" value="{{ $data->nama }}">
        <br><br>
        <label for="Password"></label>
        <input type="text" name="password" placeholder="Masukkan Password" value="{{ $data->password }}">
        <br><br>
        <label for="Level ID"></label>
        <input type="number" name="level_id" placeholder="Masukkan ID Level" value="{{ $data->level_id }}">
        <br><br>
        <input type="submit" class="btn btn-success" value="Ubah">
    </form>

</body>

</html>