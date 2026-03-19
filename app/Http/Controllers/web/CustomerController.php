<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string',
            'phone' => 'required|string',
            'car'   => 'required|string',
            'price' => 'required|string',
            'url'   => 'required|string',
            'email' => 'nullable|email',
            'note'  => 'nullable|string',
        ]);

        Customer::create($request->only('name', 'phone', 'car', 'price', 'url', 'email', 'note'));

        return response()->json(['success' => true], 201);
    }
}
