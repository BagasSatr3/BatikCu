<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index(Request $request)
    {
        $itemcontact = Contact::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'Data Contact Us',
                    'itemcontact' => $itemcontact);
        return view('contact.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    public function create()
    {
        $data = array('title' => 'Form Contact');
        return view('contact.create', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'nomor' => 'required',
            'alamat' => 'required',
        ]);

        $itemuser = $request->user();
        $inputan = $request->all();
        $itemcontact = Contact::create($inputan);
        return redirect()->route('contact.index')->with('success', 'Data Contact berhasil disimpan');
    }

    public function edit($id)
    {
        $itemcontact = Contact::findOrFail($id);
        $data = array('title' => 'Form Edit Contact',
                    'itemcontact' => $itemcontact);
        return view('contact.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required',
            'nomor' => 'required',
            'alamat' => 'required',
        ]);
        $itemcontact = Contact::findOrFail($id);
        $inputan = $request->all();
        $itemcontact->update($inputan);
        return redirect()->route('contact.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $itemcontact = Contact::findOrFail($id);

        if ($itemcontact->delete()) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }
    }
}
