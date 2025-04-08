<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail($slug){
        return view('client.product.detail',['alo' =>$slug]);
    }
    public function hello($id){
        return view('client.product.hello',['hello' =>$id]);
    }
    public function categories($id){
        $category = Category::find($id);
        return view('client.category',[
            'category' => $category
        ]);
    }
}
