<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $data = array('title' => 'Profile');
        return view('homepage.profile', $data);

    }

    // public function uploadimage(Request $request) {
    //     $this->validate($request, [
    //         'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
    //     $itemuser = $request->user();
    //     if ($userimage) {
    //         $fileupload = $request->file('image');
    //         $folder = 'assets/images';
    //         $itemgambar = (new ImageController)->upload($fileupload, $itemuser, $folder);
    //         $inputan['foto'] = $itemgambar->url;//ambil url file yang barusan diupload
    //         $userimage->update($inputan);
    //         return back()->with('success', 'Image berhasil diupload');
    //     } else {
    //         return back()->with('error', 'Kategori tidak ditemukan');
    //     }
    // }

    // public function deleteimage(Request $request, $id) {
    //     $itemuser = $request->user();
    //     $itemkategori = Kategori::where('user_id', $itemuser->id)
    //                             ->where('id', $id)
    //                             ->first();
    //     if ($itemkategori) {
    //         // kita cari dulu database berdasarkan url gambar
    //         $itemgambar = \App\Models\Image::where('url', $itemkategori->foto)->first();
    //         // hapus imagenya
    //         if ($itemgambar) {
    //             \Storage::delete($itemgambar->url);
    //             $itemgambar->delete();
    //         }
    //         // baru update foto kategori
    //         $itemkategori->update(['foto' => null]);
    //         return back()->with('success', 'Data berhasil dihapus');
    //     } else {
    //         return back()->with('error', 'Data tidak ditemukan');
    //     }
    // }
}
