<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{
    //parsing data
    $nama = "Bastian";
    $titles = ["staff", "kasir"];
    $usia = 20;
    $data = [
        "myName" => $nama,
        "age" => $usia,
        "titles" => $titles
    ];
    return view('user.index', $data);
}

public function create()
{
    return view('user.create');
}

public function store(Request $request)
{
    // Simpan data user baru
}

public function show($id)
{
    // Tampilkan detail user
}

public function edit($id)
{
    return view('user.edit');
}

public function update(Request $request, $id)
{
    // Perbarui data user
}

public function destroy($id)
{
    // Hapus user
}

}
