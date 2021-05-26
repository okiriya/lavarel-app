<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        // route parameter wildcards
        // getting query paramters eg home.html?name=peter&age=30

        // , ['name' => request('name'), 'age' => request('age')]

        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('price', 'desc')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();

        return view('products.index', ['pizzas' => $pizzas]);
    }

    public function show($id){
         
        return view('wildcards', ['id' => $id]);
    }
}
