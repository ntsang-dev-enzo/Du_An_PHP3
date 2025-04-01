<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use function Termwind\renderUsing;

class HomeController extends Controller
{
    //
    public function index(){
        $categories = Category::all();

        return view('client.home',[
            'categories' => $categories
        ]);
    }
}
