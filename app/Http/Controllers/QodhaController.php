<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Pertanyaan;
use App\Models\Produk;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QodhaController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        $randomm = $produk[rand(0, count($produk) - 1)];
        $testi = Testimoni::all();
        $faq = Faq::all();
        $dupa = DB::table('produks')->where('category_id', 'like', '1')->paginate();
        $hioharum = DB::table('produks')->where('category_id', 'like', '2')->paginate();
        return view('index',['produk'=>$produk, 'testimoni' => $testi, 'dupa'=>$dupa, 'hioharum'=>$hioharum, 'faq' => $faq, 'random'=>$randomm]);
    }

}
