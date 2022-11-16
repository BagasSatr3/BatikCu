<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $itemreview = Review::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'review Produk',
                    'itemreview' => $itemreview);
        return view('review.index', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $data = array('title' => 'Form review');
        return view('review.create', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'produk_id' => 'required',
        ]);
        $itemuser = $request->user();
        $validasireview = Review::where('produk_id', $request->produk_id)
                                    ->where('user_id', $itemuser->id)
                                    ->first();
        if ($validasireview) {
            $validasireview->delete();//kalo udah ada, berarti review dihapus
            return back()->with('success', 'review berhasil dihapus');
        } else {
            $inputan = $request->all();
            $inputan['user_id'] = $itemuser->id;
            $itemreview = Review::create($inputan);
            return back()->with('success', 'Produk berhasil ditambahkan ke review');
        }
    }
}
