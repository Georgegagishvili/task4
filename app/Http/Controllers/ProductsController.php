<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
	// public function __construct(){
	// 	$this->middleware("CheckIfCanPost");
	// }
	
    public function index()
    {
    	$products = Products::get();
    	return view('products.index',['products'=>$products]);
    }

    public function create()
    {
    	return view('products.create');
    }
    public function store(Request $request)
    {
    	Products::create([
    		"title"=>$request->input("title"),
    		"text"=>$request->input("text"),
    		"short_description"=>$request->input("short_description")
    	]);
    }
}
