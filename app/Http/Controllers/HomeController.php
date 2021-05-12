<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function products() {
        $vestiti = Dress::all();

        $data = [
            'vestiti' => $vestiti
        ];

        return view('prodotti', $data);
    }

}
