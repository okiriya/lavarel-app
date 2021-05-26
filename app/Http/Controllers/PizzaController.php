<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = Pizza::latest()->get();
        return view('pizza.index', ['pizzas' => $pizzas]);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizza.show', ['pizza' => $pizza, 'toppings' => json_decode($pizza->toppings)]);
    }

    public function create(){
        return view('pizza.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'base' => 'required',
            'toppings' => 'required'
        ]);
        

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = json_encode(request('toppings'));

        
       
        $pizza->save();


        return redirect('/')->with('mssg', 'thanks for your order');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizza');
    }
}

