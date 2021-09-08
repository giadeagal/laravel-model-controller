<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function comics() {

        $comics = Comic::all();
        // dd($comics);

        // $comics = config("comics");
    
        // $data = ["comics" => $comics];
    
        return view('comics', compact("comics"));
    }
    
    public function show($id) {

        $comic = Comic::where("id", $id)->first();
        // $comics = config("comics");
    
        $data = ["comic" => $comic];
    
        return view('detail', $data);
    }
}
