<?php

namespace App\Http\Controllers;
//iport model "post"
use App\Models\Post;

//import tipe return
use Illuminate\Http\Request;
use Illuminate\View\Vieew;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facade\Storage;

class TambahController extends Controller
{
    //method untuk menampilkan form tambah
    public function tambah(): View
    {
        //mengembalikan View untuk form tambah post
        return view('posts.create');
    }
}
