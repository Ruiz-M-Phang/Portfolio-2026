<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $testBericht = "test";

        return view('home', [ // een test of een string op de home pagina is te zien
            "testBericht" => "$testBericht"
        ]);
    }
}