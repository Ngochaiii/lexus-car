<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('src.web.products.index');
    }


    public function detail(){
        return view('src.web.products.detail');
    }
}
