<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;
use App\Product;

class ProductsController extends Controller
{
	public function index()
    {
        $mensajes = Mensaje::all();
        return view('mensajes.index')->with('mensajes',$mensajes);
    }
}
