<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Slideshow;
use App\Models\ProdukPromo;
use App\Models\Wishlist;
use App\Models\Order;
use App\Models\About;
use App\Models\Contact;
use Auth;

class HomepageController extends Controller
{
    public function index() {
        $itemproduk = Produk::orderBy('created_at', 'desc')->limit(6)->get();
        $itempromo = ProdukPromo::orderBy('created_at', 'desc')->limit(6)->get();
        $itemkategori = Kategori::orderBy('nama_kategori', 'asc')->limit(6)->get();
        $itemslide = Slideshow::get();
        $itemcontact = Contact::get();
        $itemabout = About::get();
        $data = array('title' => 'Homepage',
            'itemproduk' => $itemproduk,
            'itempromo' => $itempromo,
            'itemkategori' => $itemkategori,
            'itemslide' => $itemslide,
            'itemcontact' => $itemcontact,
            'itemabout' => $itemabout,
        );
        return view('homepage.index', $data);
    }

    public function item() {
        $itemproduk = Produk::orderBy('created_at', 'desc')->limit(6)->get();
        $itempromo = ProdukPromo::orderBy('created_at', 'desc')->limit(6)->get();
        $itemkategori = Kategori::orderBy('nama_kategori', 'asc')->limit(6)->get();
        $itemslide = Slideshow::get();
        $data = array('title' => 'Items',
            'itemproduk' => $itemproduk,
            'itempromo' => $itempromo,
            'itemkategori' => $itemkategori,
            'itemslide' => $itemslide,
        );
        return view('homepage.item', $data);
    }

    public function about() {
        $data = array('title' => 'Tentang Kami');
        return view('homepage.about', $data);
    }

    public function kontak() {
        $data = array('title' => 'Kontak Kami');
        return view('homepage.kontak', $data);
    }

    public function kategori() {
        $itemkategori = Kategori::orderBy('nama_kategori', 'asc')->limit(6)->get();
        $itemproduk = Produk::orderBy('created_at', 'desc')->limit(6)->get();
        $data = array('title' => 'Kategori Produk',
                    'itemkategori' => $itemkategori,
                    'itemproduk' => $itemproduk);
        return view('homepage.kategori', $data);
    }

    public function kategoribyslug(Request $request, $slug) {
        $itemproduk = Produk::orderBy('nama_produk', 'desc')
                            ->where('status', 'publish')
                            ->whereHas('kategori', function($q) use ($slug) {
                                $q->where('slug_kategori', $slug);
                            })
                            ->paginate(18);
        $listkategori = Kategori::orderBy('nama_kategori', 'asc')
                                ->where('status', 'publish')
                                ->get();
        $itemkategori = Kategori::where('slug_kategori', $slug)
                                ->where('status', 'publish')
                                ->first();
        $itemslide = Slideshow::get();
        if ($itemkategori) {
            $data = array('title' => $itemkategori->nama_kategori,
                        'itemproduk' => $itemproduk,
                        'listkategori' => $listkategori,
                        'itemkategori' => $itemkategori,
                        'itemslide' => $itemslide,);
            return view('homepage.produk', $data)->with('no', ($request->input('page') - 1) * 18);
        } else {
            return abort('404');
        }
    }

    public function produk(Request $request) {
        $search = $request->query('q');
        $itemslide = Slideshow::get();
        $itemproduk = Produk::orderBy('nama_produk', 'desc')
                            ->where('status', 'publish')
                            ->paginate(18);

        $product_search = Produk::orderBy('nama_produk', 'desc')
                                ->where('status', 'publish')
                                ->where('nama_produk', 'LIKE', '%'.$search.'%')
                                ->paginate(18);

        $listkategori = Kategori::orderBy('nama_kategori', 'asc')
                                ->where('status', 'publish')
                                ->get();

        $data = array('title' => 'Produk',
                    // 'itemproduk' => $itemproduk,
                    'itemproduk' => $product_search,
                    'listkategori' => $listkategori,
                    'itemslide' => $itemslide,
                );
        return view('homepage.produk', $data)->with('no', ($request->input('page') - 1) * 18);
    }

    public function produkdetail($id) {
        $itemproduk = Produk::where('slug_produk', $id)
                            ->where('status', 'publish')
                            ->first();
        $itemslide = Slideshow::get();

        if ($itemproduk) {
            if (Auth::user()) {//cek kalo user login
                $itemuser = Auth::user();
                $itemwishlist = Wishlist::where('produk_id', $itemproduk->id)
                                        ->where('user_id', $itemuser->id)
                                        ->first();
                $data = array('title' => $itemproduk->nama_produk,
                        'itemproduk' => $itemproduk,
                        'itemwishlist' => $itemwishlist);
            } else {
                $data = array('title' => $itemproduk->nama_produk,
                            'itemproduk' => $itemproduk);
            }
            return view('homepage.produkdetail', $data);
        } else {
            // kalo produk ga ada, jadinya tampil halaman tidak ditemukan (error 404)
            return abort('404');
        }
    }

    public function orders(Request $request)
    {
        $itemuser = $request->user();
            // kalo member maka menampilkan cart punyanya sendiri
            $itemorder = Order::whereHas('cart', function($q) use ($itemuser) {
                            $q->where('status_cart', 'checkout');
                            $q->where('user_id', $itemuser->id);
                        })
                        ->orderBy('created_at', 'desc')
                        ->paginate(20);

        $data = array('title' => 'Data Transaksi',
                    'itemorder' => $itemorder,
                    'itemuser' => $itemuser);
        return view('homepage.order', $data)->with('no', ($request->input('page', 1) - 1) * 20);
    }

    // public function showOrder(Request $request, $id)
    // {

    //     $itemuser = $request->user();

    //         $itemorder = Order::where('id', $id)
    //                         ->whereHas('cart', function($q) use ($itemuser) {
    //                             $q->where('user_id', $itemuser->id);
    //                         })->first();
    //         if ($itemorder) {
    //             $data = array('title' => 'Detail Transaksi',
    //                         'itemorder' => $itemorder);
    //             return view('homepage.orderDetail', $data)->with('no', 1);
    //         } else {
    //             return abort('404');
    //         }
    //     }

}
