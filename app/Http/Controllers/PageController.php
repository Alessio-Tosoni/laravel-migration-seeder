<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
       
        $dati = [
            "trains" => Train::where('giorno_di_partenza', "2024-01-26")->get()
        ];

        return view('home', $dati);
    }
}