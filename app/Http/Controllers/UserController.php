<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id'  => 4
        // ];
        // UserModel::insert($data);

        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // $data = [
        //     'level_id'  => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        // ];

        // UserModel::create($data);

        // $user = UserModel::firstwhere('level_id',1);

        // $user = UserModel::findOr(20,['username','nama'], function(){
        //     abort(404);
        // });

        // $user = UserModel::findOrFail(1);
        // $user = UserModel::where('username','manager9')->firstOrFail();

        //$user = UserModel::where('level_id',2,)->count();
        // dd($user);

        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );
        // $user->save();
        // return view('user', ['data' => $user]);

        // $user = UserModel::create([
        //         'username' => 'manager44',
        //         'nama' => 'Manager44',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        // ]);

        // $user->username = 'manager45';

        // $user->isDirty(); //t
        // $user->isDirty('username'); //t
        // $user->isDirty('nama'); //f
        // $user->isDirty(['nama','username']); //t

        // $user->isClean(); //f
        // $user->isClean('username'); //f
        // $user->isClean('nama'); //t
        // $user->isClean(['nama', 'username']); //f

        // $user->save();
        // $user->isDirty(); //f
        // $user->isClean(); //t

        // dd($user->isDirty());


        // $user = UserModel::create([
        //     'username' => 'manager11',
        //     'nama' => 'Manager11',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ]);

        // $user->username='manager12';
        // $user->save();

        // $user->wasChanged(); //t
        // $user->wasChanged('username'); //t
        // $user->wasChanged(['username','level_id']); //t
        // $user->wasChanged('nama'); //f
        // dd($user->wasChanged(['nama','username']));

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make('$request->password'),
            'level_id' => $request->level_id
        ]);

        return redirect('/user');
    }

    public function ubah_Simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;

        $user->save();
        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
