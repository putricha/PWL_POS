<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function fileUpload(){
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request){
        // dump($request->berkas);
        // $request->validate([
        //     'berkas' => 'required|file|image|max:500']);
        //     $extfile=$request->berkas->getClientOriginalName();
        //     $nameFile =  'web-' .time().".".$extfile;
        //     $path = $request->berkas->storeAs('public',$nameFile);


        //     $pathBaru=asset('storage/'.$nameFile);
        //     echo "proses upload berhasil, data disimpan pada :$path";
        //     echo "<br>";
        //     echo "Tampilkan link:<a href='$pathBaru'> $pathBaru</a>";

        //     echo $request->berkas->getClientOriginalName()."lolos validasi";

        // $request->validate([
        //     'berkas' => 'required|file|image|max:500'
        // ]);
        // $extfile = $request->berkas->getClientOriginalName();
        // $nameFile =  $request->nama;

        // $path = $request->berkas->move('gambar', $nameFile);
        // $path = str_replace("\\","//",$path);
        // echo "Variabel path berisi: $path<br>";


        // $pathBaru = asset('gambar/' . $nameFile);
        // echo "proses upload berhasil, data disimpan pada :$path";
        // echo "<br>";
        // echo "Tampilkan link:<a href='$pathBaru'> $pathBaru</a>";

        // echo $request->berkas->getClientOriginalName() . "lolos validasi";
        //TUGAS
        $request->validate([
            'berkas' => 'required|file|image|max:500',
            'nama' => 'required|string'
        ]);
        // $extfile = $request->berkas->getClientOriginalName();
        // $namaFile = 'web-'.time().".".$extfile;

        // $path = $request->berkas->storeAs('public', $namaFile);
        $path = $request->berkas->move('gambar', $request->nama);
        $path = str_replace("\\", "/", $path);
        echo "Variabel path berisi: $path <br>";

        $pathBaru = asset('gambar/' . $request->nama);
        echo "Proses upload berhasil, data disimpan pada: $path <br>";
        // echo "Tampilkan link:<a href='$pathBaru'>$pathBaru</a>";
        echo "<img src='$pathBaru' alt='Uploaded Image'>";




        // if ($request->hasFile('berkas')) {
        //     echo "path(): " . $request->berkas->path();
        //     echo "<br>";
        //     echo "extension(): " . $request->berkas->extension();
        //     echo "<br>";
        //     echo "getClientOriginal Extension(): " .
        //         $request->berkas->getClientOriginalExtension();
        //     echo "<br>";
        //     echo "getMimeType(): " . $request->berkas->getMimeType();
        //     echo "<br>";
        //     echo "getClientOriginalName(): " .
        //         $request->berkas->getClientOriginalName();
        //     echo "<br>";
        //     echo "getSize(): " . $request->berkas->getSize();
        // } else {
        //     echo "Tidak ada berkas yang diupload";
        // }
        // return "Pemrosesan file upload di sini";
    }
}
