<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index(){
        return view('src.web.products.index');
    }


    public function lm(){
        return view('src.web.products.lm');
    }

    public function nx(){
        return view('src.web.products.nx');
    }

    public function lx(){
        return view('src.web.products.lx');
    }

    public function ls(){
        return view('src.web.products.ls');
    }

    public function gx(){
        return view('src.web.products.gx');
    }

    public function es(){
        return view('src.web.products.es');
    }
}
