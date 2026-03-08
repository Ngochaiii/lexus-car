<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        return view('src.web.blogs.index');
    }

    public function detail(){
        return view('src.web.blogs.detail');
    }
}
