<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $itemabout = About::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'About Us',
                    'itemabout' => $itemabout);
        return view('about.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    public function create(Request $request)
    {
        $data = array('title' => 'Form Kategori');
        return view('about.create', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'header' => 'required',
            'body' => 'required',

        ]);

        $itemuser = $request->user();
        $inputan = $request->all();
        $itemabout = About::create($inputan);
        return redirect()->route('about.index')->with('success', 'Data about berhasil disimpan');
    }

    public function edit($id)
    {
        $itemabout = About::findOrFail($id);
        $data = array('title' => 'Form Edit about',
                    'itemabout' => $itemabout);
        return view('about.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'header' => 'required',
            'body' => 'required',
        ]);
        $itemabout = About::findOrFail($id);
        $inputan = $request->all();
        $itemabout->update($inputan);
        return redirect()->route('about.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $itemabout = About::findOrFail($id);//cari berdasarkan id = $id,
        // kalo ga ada error page not found 404
        if (($itemabout->produk) > 0) {
            // dicek dulu, kalo ada produk di dalam kategori maka proses hapus dihentikan
            return back()->with('error', 'Hapus dulu about, proses dihentikan');
        } else {
            if ($itemabout->delete()) {
                return back()->with('success', 'Data berhasil dihapus');
            } else {
                return back()->with('error', 'Data gagal dihapus');
            }
        }
    }
}
