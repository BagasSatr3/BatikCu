<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $itemprofile = User::latest()->paginate(5);
        $data = array('title' => 'Profile');
        return view('homepage.profile', $data);
    }

    public function setting() {
        $data = array('title' => 'Setting Profil');
        return view('user.setting', $data);
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        // $itemprofile = User::findOrFail();//cari berdasarkan id = $id,
        // kalo ga ada error page not found 404
        $data = array('title' => 'Form Edit Profile');
        return view('homepage.editProfile', $data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required',
            'email' => 'required',
            'phone' => 'required',
            'alamat' => 'required',

        ]);
        $itemprofile = Kategori::findOrFail($id);//cari berdasarkan id = $id,
        // kalo ga ada error page not found 404
        $slug = \Str::slug($request->slug_kategori);//slug kita gunakan nanti pas buka produk per kategori
        // kita validasi dulu, biar tidak ada slug yang sama
        $validasislug = Kategori::where('id', '!=', $id)//yang id-nya tidak sama dengan $id
                                ->where('slug_kategori', $slug)
                                ->first();
        if ($validasislug) {
            return back()->with('error', 'Slug sudah ada, coba yang lain');
        } else {
            $inputan = $request->all();
            $inputan['slug'] = $slug;
            $itemprofile->update($inputan);
            return redirect()->route('kategori.index')->with('success', 'Data berhasil diupdate');
        }
    }
}
