<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function homepage() {
        $response = Http::get('https://api.jikan.moe/v4/genres/anime')->json(); 

        return view('homepage', ['data' => $response['data']]);
    }

    public function genre($id) {
        $response = Http::get('https://api.jikan.moe/v4/anime?genres=' . $id)->json();
        return view('detail', ['data' => $response['data']]);
    }

    public function detail($id) {
        $response = Http::get('https://api.jikan.moe/v4/anime/' . $id)->json();
        return view('genre-detail', ['data' => $response['data']]);
    }

}
 

