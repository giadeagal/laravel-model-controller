<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function comics() {

        $comics = Comic::all();

        // $comics = config("comics");
    
        // $data = ["comics" => $comics];
    
        // return view('comics', $data);
    }
    
    public function show($id) {
        $comics = config("comics");
    
        $data = ["comic" => $comics[$id]];
    
        return view('detail', $data);
    }
}
