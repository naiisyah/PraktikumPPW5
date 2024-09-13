<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index (){
        $data_buku = Buku::all()->sortBy('id');
        $sum = Buku::sum('harga');
        $total = Buku::count();
        return view('index', compact('data_buku', 'sum', 'total'));
    }
}
